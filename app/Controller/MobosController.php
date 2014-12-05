<?php
class MobosController extends AppController {
var $name = 'Mobo';

    public function index() {
        $this->set('mobos', $this->Mobo->find('all'));
    }

	public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $mobo = $this->Mobo->findById($id);
        if (!$mobo) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('mobo', $mobo);
		
		if ($this->request->is('post')) {
	$title = h($mobo['Mobo']['title']);
	$this->Session->write('Mobo.title', $title);
	$socket = h($mobo['Mobo']['socket']);
	$this->Session->write('Mobo.socket', $socket);
	$type = h($mobo['Mobo']['type']);
	$this->Session->write('Mobo.type', $type);
	echo "Toegevoegd aan PC Builder";
        }

    }
	
	public function searchMobo() {
	  
	$socketcpu = $this->Session->read('Cpu.socket');
	$searchMobos = $this->set('mobos', $this->Mobo->find('all', array('conditions' => array ('socket' => $socketcpu))));
    }
}
?>
