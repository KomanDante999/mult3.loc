<!-- TODO: -->
<?php
class ControllerExtensionCtmenu extends Controller
{
	private $error = array();

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

			];
		}
	}
}
