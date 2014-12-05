<?php
class CpusController extends AppController {
var $name = 'Cpu';

    public function index() {
        $this->set('cpus', $this->Cpu->find('all'));
    }

	public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $cpu = $this->Cpu->findById($id);
        if (!$cpu) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('cpu', $cpu);
		
	if ($this->request->is('post')) {
	$title = h($cpu['Cpu']['title']);
	$this->Session->write('Cpu.title', $title);
	$socket = h($cpu['Cpu']['socket']);
	$this->Session->write('Cpu.socket', $socket);
	echo "Toegevoegd aan PC Builder";
        }
    }
	
	 public function searchCpu() {
	  
	$socketmobo = $this->Session->read('Mobo.socket');
	$searchCpus = $this->set('cpus', $this->Cpu->find('all', array('conditions' => array ('socket' => $socketmobo))));
    }
}
?>