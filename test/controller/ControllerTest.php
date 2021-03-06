<?php

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-12-11 at 22:52:27.
 */

require_once '../controller/Controller.php';

class ControllerTest extends PHPUnit_Framework_TestCase {

    /**
     * @var Controller
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Controller;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Controller::cadatrarCarro
     * @todo   Implement testCadatrarCarro().
     */
    public function testCadatrarCarroSuccess() {
        $this->object->cadatrarCarro("Uchiha", "Konoha", 30000, "Red", "Tinin", "CHP-51175");
        $this->object->cadatrarCarro("Uzumaki", "Naruto", 30000, "Red", "Tinin", "CHP-51174");
        $this->assertEquals("Uchiha", $this->object->getCarros()[0]->getMarca());
    }
    
    /**
     * @covers Controller::cadatrarCarro
     * @todo   Implement testCadatrarCarro().
     */
    public function testCadatrarCarroComPlacaRepetida() {
        $result = $this->object->cadatrarCarro("Uchiha", "Konoha", 30000, "Red", "Tinin", "CHP-51175");
        $result = $this->object->cadatrarCarro("Uzumaki", "Naruto", 30000, "Red", "Tinin", "CHP-51175");
        $this->assertEquals(false, $result);
    }

    /**
     * @covers Controller::calcularPrecoSeguro
     * @todo   Implement testCalcularPrecoSeguro().
     */
    public function testCalcularPrecoSeguro() {
        $this->object->cadatrarCarro("Uchiha", "Konoha", 30000, "Red", "Tinin", "CHP-51174");
        $this->assertEquals(4500, $this->object->calcularPrecoSeguro(0));
    }
    
    /**
     * @covers Controller::validaCpf
     * @todo   Implement testValidaCpf().
     */
    public function testValidaCpfSuccess() {
        $result = $this->object->validaCpf('12345678945');
        $this->assertEquals(true, $result);
    }
    
    /**
     * @covers Controller::validaCpf
     * @todo   Implement testValidaCpf().
     */
    public function testValidaCpfFail() {
        $result = $this->object->validaCpf('12345678944');
        $this->assertEquals(false, $result);
    }
}
