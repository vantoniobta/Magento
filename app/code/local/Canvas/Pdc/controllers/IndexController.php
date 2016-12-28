<?php
class Canvas_Pdc_IndexController extends Mage_Core_Controller_Front_Action {

  // public function preDispatch(){
  // parent::preDispatch();
  // if (!Mage::getSingleton('customer/session')->authenticate($this)) {
  // $this->getResponse()->setRedirect(Mage::helper('customer')->getLoginUrl());
  // $this->setFlag('', self::FLAG_NO_DISPATCH, true);
  // }
  // }
public function indexAction() {
$this->loadLayout();
  $this->renderLayout();
  return $this;
  }
  public function imagenpdcAction() {
  // Mage::getSingleton('core/session')->setValueOne($imagen_Nombre);
  }

  public function carritopdcAction() {
  }

  public function pedidoAction() {
  //optener el id del cliente logeado....!!!
  //$id_cliente=Mage::getSingleton('customer/session')->getCustomer()->getId();

  }

  public function deletepdcAction(){
  echo "string";

  }

}