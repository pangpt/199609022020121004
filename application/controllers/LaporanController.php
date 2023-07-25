<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	// }
    public function __construct() {
        parent::__construct();
    }

    public function getRekrutmen() {
        $sourceUrl = 'http://103.226.55.159/json/data_rekrutmen.json';
        $sourceUrl2 = 'http://103.226.55.159/json/data_attribut.json';
        $rekrutmen = json_decode(file_get_contents($sourceUrl), true);
        $attribut = json_decode(file_get_contents($sourceUrl2), true);
        // $dataRekrutmen = json_decode($rekrutmen, true);
        // Gabungkan data JSON 1 dan JSON 2 berdasarkan relasi ID pendaftar
        // $mergedData = array();
        // foreach ($rekrutmen['Form Responses 1'] as $item1) {
        //     $idPendaftar = $item1['id'];
        //     foreach ($attribut as $item2) {
        //         if ($item2['id_pendaftar'] == $idPendaftar) {
        //             $mergedData[] = array_merge($item1, $item2);
        //         }
        //     }
        // }
        // Buat asosiasi data dari JSON 2 berdasarkan ID pendaftar
        $attributData = array();
        foreach ($attribut as $item2) {
            $idPendaftar = $item2['id_pendaftar'];
            $attributData[$idPendaftar][] = $item2;
        }

        // Ambil nama atribut dari JSON 2
        $attributeNames = array();
        foreach ($attribut as $attribute) {
            $attributeNames[] = $attribute['jenis_attr'];
        }

        // Gabungkan data JSON 1 dan atribut data
        $mergedData = array();
        foreach ($rekrutmen['Form Responses 1'] as $item1) {
            $idPendaftar = $item1['id'];
            $item1['atribut'] = isset($attributData[$idPendaftar]) ? $attributData[$idPendaftar] : array();
            $mergedData[] = $item1;
        }
        // var_dump($dataRekrutmen);

        // $this->load->view('laporan_view', array('dataRekrutmen' => $dataRekrutmen));    
        $this->load->view('laporan_view', array(
            'mergedData' => $mergedData,
            'attributeNames' => $attributeNames,
        ));  
    }
}
