<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_model('comm3_item.php');

/**
 * Description of community_changelog
 *
 * @author carlos
 */
class community_changelog extends fs_controller
{
   public function __construct()
   {
      parent::__construct(__CLASS__, 'Changelog', 'comunidad', FALSE, FALSE);
   }
   
   protected function public_core()
   {
      $this->template = 'public/portada';
      
      
   }
}
