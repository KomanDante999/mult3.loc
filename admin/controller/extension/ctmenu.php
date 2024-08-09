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
		} else {
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
			if ($this-> ) {
				# code...
			} else {
				# code...
			}
			
		}
	}
}
