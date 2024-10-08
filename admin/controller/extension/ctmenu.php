<?php
// TODO:
class ControllerExtensionCtmenu extends Controller
{
	private $error = array();

	// show all
	public function index()
	{
		$this->load->language('extension/ctmenu');
		$this->document->setTitle($this->language->get('heading_title'));
		$this->load->model('extension/ctmenu');

		// install method
		$this->model_extension_ctmenu->install();

		// breadcrumbs
		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', "user_token={$this->session->data['user_token']}", true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/ctmenu', "user_token={$this->session->data['user_token']}", true)
		);

		// button add
		$data['add'] = $this->url->link('extension/ctmenu/add-menu', "user_token={$this->session->data['user_token']}", true);

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		//  flash messages
		if (isset($this->session->data['error'])) {
			$data['error_warning'] = $this->session->data['error'];
			unset($this->session->data['error']);
		} else {
			$data['error'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		// menu list
		$menu_list = $this->model_extension_ctmenu->getMenuList();
		foreach ($menu_list as $menu_item) {
			$data['ctmenu'][] = [
				'id' => $menu_item['id'],
				'title' => $menu_item['title'],
				'edit' => $this->url->link('extension/ctmenu/edit-menu', "user_token={$this->session->data['user_token']}&menu_id={$menu_item['id']}", true),
				'delete' => $this->url->link('extension/ctmenu/delete-menu', "user_token={$this->session->data['user_token']}&menu_id={$menu_item['id']}", true),
				'view_menu_links' => $this->url->link('extension/ctmenu/view-menu-links', "user_token={$this->session->data['user_token']}&menu_id={$menu_item['id']}", true),
			];
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		$this->response->setOutput($this->load->view('extension/ctmenu/index', $data));
	}

	// add menu
	public function addMenu()
	{
		$this->load->language('extension/ctmenu');
		$this->document->setTitle($this->language->get('heading_title'));
		$this->load->model('extension/ctmenu');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateMenuForm()) {
			// save form
			$this->model_extension_ctmenu->addMenu($this->request->post['ctmenu']);
			$this->session->data['success'] = $this->language->get('text_success');
			$this->response->redirect($this->url->link('extension/ctmenu', "user_token={$this->session->data['user_token']}", true));
		}

		$this->getMenuForm();
	}

	// edit menu
	public function editMenu()
	{
		$this->load->language('extension/ctmenu');
		$this->document->setTitle($this->language->get('heading_title'));
		$this->load->model('extension/ctmenu');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateMenuForm()) {
			// save form
			$this->model_extension_ctmenu->editMenu($this->request->get['menu_id'], $this->request->post['ctmenu']);
			$this->session->data['success'] = $this->language->get('text_success');
			$this->response->redirect($this->url->link('extension/ctmenu', "user_token={$this->session->data['user_token']}", true));
		}

		$this->getMenuForm();
	}

	// menu form
	protected function getMenuForm()
	{
		$data['text_form'] = !isset($this->request->get['menu_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['error_warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['title'])) {
			$data['error_title'] = $this->error['error_title'];
		} else {
			$data['error_title'] = array();
		}

		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', "user_token={$this->session->data['user_token']}", true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/ctmenu', "user_token={$this->session->data['user_token']}", true)
		);

		if (!isset($this->request->get['menu_id'])) {
			$data['action'] = $this->url->link('extension/ctmenu/add-menu', "user_token={$this->session->data['user_token']}", true);
		} else {
			$data['action'] = $this->url->link('extension/ctmenu/edit-menu', "user_token={$this->session->data['user_token']}&menu_id={$this->request->get['menu_id']}", true);
		}

		$data['cancel'] = $this->url->link('extension/ctmenu', "user_token={$this->session->data['user_token']}", true);

		$data['user_token'] = $this->session->data['user_token'];

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		if (isset($this->request->get['menu_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$data['ctmenu_data'] = $this->model_extension_ctmenu->getMenu($this->request->get['menu_id']);
		} elseif (isset($this->request->post['ctmenu'])) {
			$data['ctmenu_data'] = $this->request->post['ctmenu'];
		}

		$this->response->setOutput($this->load->view('extension/ctmenu/menu_form', $data));
	}

	// delete menu
	public function deleteMenu()
	{
		if (isset($this->request->get['menu_id']) && $this->validateDelete()) {
			$this->load->model('extension/ctmenu');
			$this->load->language('extension/ctmenu');
			if ($this->model_extension_ctmenu->deleteMenu($this->request->get['menu_id'])) {
				$this->session->data['success'] = $this->language->get('error_delete_menu');
			} else {
				$this->response->redirect($this->url->link('extension/ctmenu', "user_token={$this->session->data['user_token']}", true));
			}
		}
		$this->index();
	}

	// show menu links
	public function viewMenuLinks()
	{
		$this->load->language('extension/ctmenu');
		$this->document->setTitle($this->language->get('heading_title'));
		$this->load->model('extension/ctmenu');

		// breadcrumbs
		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', "user_token={$this->session->data['user_token']}", true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/ctmenu', "user_token={$this->session->data['user_token']}", true)
		);

		// button add
		$data['add'] = $this->url->link('extension/ctmenu/add-menu-link', "user_token={$this->session->data['user_token']}&menu_id={$this->request->get['menu_id']}", true);

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		//  flash messages
		if (isset($this->session->data['error'])) {
			$data['error_warning'] = $this->session->data['error'];
			unset($this->session->data['error']);
		} else {
			$data['error'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		// menu list
		$menu_data = $this->model_extension_ctmenu->getTreeItems($this->request->get['menu_id']);
		$menu_tree = $this->model_extension_ctmenu->getMapTree($menu_data);
		$data['ctmenu'] = $this->treeToHtml($menu_tree);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		$this->response->setOutput($this->load->view('extension/ctmenu/menu_view_links', $data));
	}
	//  add  menu links
	public function addMenuLink()
	{
		$this->load->language('extension/ctmenu');
		$this->document->setTitle($this->language->get('heading_title'));
		$this->load->model('extension/ctmenu');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateMenuLinkForm()) {
			// $this->dump($this->request->post);
			// save form
			$this->model_extension_ctmenu->addMenuLink($this->request->get['menu_id'], $this->request->post);
			$this->session->data['success'] = $this->language->get('text_success');
			// $this->cache->delete('ctmenu');
			$this->response->redirect($this->url->link('extension/ctmenu/view-menu-links', "user_token={$this->session->data['user_token']}&menu_id={$this->request->get['menu_id']}", true));
		}

		$this->getMenuLinkForm();
	}


	protected function getMenuLinkForm()
	{
		$data['text_form'] = !isset($this->request->get['menu_link_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		// if (isset($this->session->data['success'])) {
		// 	$data['success'] = $this->session->data['success'];
		// 	unset($this->session->data['success']);
		// } else {
		// 	$data['success'] = '';
		// }

		if (isset($this->error['title'])) {
			$data['error_title'] = $this->error['title'];
		} else {
			$data['error_title'] = array();
		}

		if (isset($this->error['link'])) {
			$data['error_link'] = $this->error['link'];
		} else {
			$data['error_link'] = array();
		}

		// breadcrumbs
		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', "user_token={$this->session->data['user_token']}", true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/ctmenu', "user_token={$this->session->data['user_token']}", true)
		);

		if (!isset($this->request->get['menu_link_id'])) {
			$data['action'] = $this->url->link('extension/ctmenu/add-menu-link', "user_token={$this->session->data['user_token']}&menu_id={$this->request->get['menu_id']}", true);
		} else {
			$data['action'] = $this->url->link('extension/ctmenu/edit-menu-link', "user_token={$this->session->data['user_token']}&menu_link_id={$this->request->get['menu_link_id']}", true);
		}

		$data['user_token'] = $this->session->data['user_token'];

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		if (isset($this->request->post['menu_description'])) {
			$data['menu_description'] = $this->request->post['menu_description'];
		}

		if (isset($this->request->get['menu_link_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$data['menu_description'] = $this->model_extension_ctmenu->getMenuLink($this->request->get['menu_link_id']);
		} elseif (isset($this->request->post['ctmenu'])) {
			// post
			$data['menu_description'] = $this->request->post['menu_description'];
		}

		if (isset($this->request->get['menu_id'])) {
			// add
			$menu_id = $this->request->get['menu_id'];
			$parent_id = 0;
			$data['cancel'] = $this->url->link('extension/ctmenu/view-menu-links', "user_token={$this->session->data['user_token']}&menu_id={$this->request->get['menu_id']}", true);
		} elseif (isset($this->request->get['menu_link_id'])) {
			// edit
			$menu_link = $this->model_extension_ctmenu->getMenuLinkByLinkId($this->request->get['menu_link_id']);
			$menu_id = $menu_link['menu_id'];
			$parent_id = $menu_link['parent_id'];
			$data['cancel'] = $this->url->link('extension/ctmenu/view-menu-links', "user_token={$this->session->data['user_token']}&menu_id={$menu_id}", true);
		} else {
			$menu_id = 0;
		}

		$menu_data = $this->model_extension_ctmenu->getTreeItems($menu_id);
		$menu_tree = $this->model_extension_ctmenu->getMapTree($menu_data);
		$data['ctmenu_select'] = $this->treeToHtml($menu_tree, 'select', '', $parent_id);

		$this->response->setOutput($this->load->view('extension/ctmenu/menu_link_form', $data));
	}


	private function treeToHtml($tree, $tpl = 'list', $tab = '', $parent_id = 0)
	{
		$str = '';
		foreach ($tree as $item) {
			$str .= $this->treeToTemplate($item, $tpl, $tab, $parent_id);
		}
		return $str;
	}

	private function treeToTemplate($item, $tpl, $tab, $parent_id)
	{
		ob_start();

		if (!isset($item['children'])) {
			$delete_link = $this->url->link('extension/ctmenu/delete-menu-link', "user_token={$this->session->data['user_token']}&menu_link_id={$item['id']}", true);
			$delete = '<a href="' . $delete_link . '" class="delete btn btn-danger"><i class="fa fa-trash-o"></i></a>';
		}
		$edit = $this->url->link('extension/ctmenu/edit-menu-link', "user_token={$this->session->data['user_token']}&menu_link_id={$item['id']}", true);
?>

		<?php if ($tpl == 'list') : ?>
			<p class="item-p">
				<a class="list-group-item" href="<?= $edit; ?>"><?= $item['title']; ?></a>
				<?php if (isset($delete)) : ?>
					<span><?= $delete; ?></span>
				<?php endif ?>
			</p>

			<?php if (isset($item['children'])) : ?>
				<div class="list-group">
					<?= $this->treeToHtml($item['children']); ?>
				</div>
			<?php endif; ?>
		<?php endif; ?>

		<?php if ($tpl == 'select') : ?>
			<option value="<?= $item['id']; ?>" <?php if ($item['id'] == $parent_id) echo 'selected'; ?> <?php if (isset($_GET['menu_link_id']) && $item['id'] == $_GET['menu_link_id']) echo ' disabled'; ?>>
				<?= $tab . $item['title']; ?>
			</option>
			<?php if (isset($item['children'])) : ?>
				<?= $this->treeToHtml($item['children'], 'select', '&nbsp;' . $tab . '-', $parent_id); ?>
			<?php endif ?>
		<?php endif ?>

<?php
		return ob_get_clean();
	}

	protected function validateMenuForm()
	{
		if (!$this->user->hasPermission('modify', 'extension/ctmenu')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		$title = trim($this->request->post['ctmenu']['title']);
		if ((utf8_strlen($title) < 1) || (utf8_strlen($title) > 255)) {
			$this->error['title'] = $this->language->get('error_warning');
		}

		return !$this->error;
	}

	protected function validateMenuLinkForm()
	{
		if (!$this->user->hasPermission('modify', 'extension/ctmenu')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		foreach ($this->request->post['menu_description'] as $language_id => $value) {
			if ((utf8_strlen($value['title']) < 1) || (utf8_strlen($value['title']) > 255)) {
				$this->error['title'][$language_id] = $this->language->get('error_title');
			}
			if ((utf8_strlen($value['link']) < 1) || (utf8_strlen($value['link']) > 255)) {
				$this->error['link'][$language_id] = $this->language->get('error_link');
			}
		}

		if ($this->error && !isset($this->error['warning'])) {
			$this->error['warning'] = $this->language->get('error_warning');
		}

		return !$this->error;
	}

	protected function validateDelete()
	{
		if (!$this->user->hasPermission('modify', 'extension/ctmenu')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	private function dump($data, $die = true)
	{
		echo "<pre>" . print_r($data, 1) . "</pre>";
		if ($die) {
			die;
		}
	}
}
