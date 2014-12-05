<h1>U heeft onderstaande configuratie geselecteerd:</h1>
<br>
<h1>Moederbord: </h1><?php
$titlemobo = $this->Session->read('Mobo.title');
echo $titlemobo;
?>
<br>
<a href="http://mitchell-i.nl/cake/mobos/searchMobo">Selecteer ander moederbord</a>
<br><br>
<h1>Processor: </h1><?php
$titlecpu = $this->Session->read('Cpu.title');
echo $titlecpu;
?>
<br>
<a href="http://mitchell-i.nl/cake/cpus/searchCpu">Selecteer andere processor</a>
<br><br>
<h1>RAM geheugen: </h1><?php
$titleram = $this->Session->read('Ram.title');
echo $titleram;
?>
<br>
<a href="http://mitchell-i.nl/cake/rams/searchRam">Selecteer ander RAM geheugen</a>

