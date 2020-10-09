<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('html'); 
    }

	public function index()
	{
	   //ヘルパー呼び出し
	    $this->load->helper('form');
		$this->load->helper('email');

	    //ライブラリ呼び出し
	    $this->load->library('form_validation');

	    //バリデーション設定
	    $this->form_validation->set_rules('email', 'メールアドレス', 'required|alpha');
	    $this->form_validation->set_rules('name', '名前', 'required');
	    $this->form_validation->set_rules('age', '年齢', 'required|numeric');
	    $this->form_validation->set_rules('pref', '都道府県', 'required|numeric');


	    //エラーメッセージの基本形設定
	    $this->form_validation->set_message('required', '%sが入力されていません。');

	    if ($this->form_validation->run() == FALSE){
     		//初回読み込み、またはエラー時のview呼び出し
            $this->load->view('form');
        }
        else{
      		//バリデーション通過時のview呼び出し
            $this->load->view('thanks');
        }
	}
}
