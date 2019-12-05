<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();

		$this->load->database();

	}

    public function index()
    {
        $sql =<<<SQL
            SELECT `id`, `title`, `contents` FROM `blog`;
SQL;
        $blogs = $this->db->query($sql)->result_array();

        $data['blogs'] = $blogs;
        $this->load->view('blog/index', $data);
    }


	public function create()
	{
		$this->load->view('blog/create');
    }

    public function store()
    {
        $post = $_POST;

        $sql =<<<SQL
            INSERT INTO `blog` (`title`, `contents`) VALUES (?, ?);
SQL;
        $insert_data[] = $post['title'];
        $insert_data[] = $post['contents'];

        $result = $this->db->query($sql, $insert_data);
		/*
		print "<pre>";
        var_dump($this->db->last_query());
		 */

        if ($result) {
            echo "作成しました";
        } else {
            echo "作成出来ませんでした";
        }

        $this->load->view('blog/store', $post);
    }

    public function detail($id)
    {
        $sql =<<<SQL
            SELECT * FROM `blog` WHERE `id` = ?
SQL;
        $sql_data[] = $id;

        $blogs = $this->db->query($sql, $sql_data)->row_array();

        $data['blogs'] = $blogs;

        $this->load->view('blog/detail', $data);

    }

    public function edit($id)
    {
        $sql =<<<SQL
            SELECT * FROM `blog` WHERE `id` = ?
SQL;
        $sql_data[] = $id;

        $blogs = $this->db->query($sql, $sql_data)->row_array();

        $data['blogs'] = $blogs;

        $this->load->view('blog/edit', $data);
    }

    public function update()
    {
        $post = $_POST;

        $sql =<<<SQL
            UPDATE `blog` SET `title` = ?, `contents` = ? WHERE `id` = ?
SQL;
        $sql_data[] = $post['title'];
        $sql_data[] = $post['contents'];
        $sql_data[] = $post['id'];

        $result = $this->db->query($sql, $sql_data);

        if ($result) {
            echo "更新しました";
        } else {
            echo "更新できませんでした";
        }
        $this->load->view('blog/update', $post);
    }





}
