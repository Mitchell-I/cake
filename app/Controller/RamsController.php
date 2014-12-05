<?php
class RamsController extends AppController {
var $name = 'Ram';

    public function index() {
        $this->set('rams', $this->Ram->find('all'));
    }

	public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $ram = $this->Ram->findById($id);
        if (!$ram) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('ram', $ram);

	if ($this->request->is('post')) {
	$title = h($ram['Ram']['title']);
	$this->Session->write('Ram.title', $title);
	$type = h($ram['Ram']['type']);
	$this->Session->write('Ram.type', $type);
	echo "Toegevoegd aan PC Builder";
        }
    }
	
	 public function searchRam() {
	  
	$typeram = $this->Session->read('Mobo.type');
	$searchRams = $this->set('rams', $this->Ram->find('all', array('conditions' => array ('type' => $typeram))));
    }
}
?>
