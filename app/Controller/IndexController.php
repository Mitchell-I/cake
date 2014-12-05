<?php
class IndexController extends AppController {

	public function index() {

	}

	public function builder () {
	
	}
	
	public function zoek () {
	$socketcpu = $this->Session->read('Cpu.socket');
	echo $socketcpu;
	$zoekCpus = $this->set('cpus', $this->Cpu->find('all', array('conditions' => array ('socket' => '775'))));
	}
}