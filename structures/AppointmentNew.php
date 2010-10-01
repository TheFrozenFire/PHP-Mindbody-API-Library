<?php
class AppointmentNew {
  public $AppointmentID; // int
  public $Location; // Location
  public $Trainer; // Trainer
  public $Client; // Client
  public $StartDateTime; // dateTime
  public $EndDateTime; // dateTime
  public $Resources; // ArrayOfResource
  public $Notes; // string
  public $Status; // AppointmentStatus
}
?>