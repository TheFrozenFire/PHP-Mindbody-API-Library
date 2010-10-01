<?php
class Appointment {
  public $AppointmentID; // int
  public $CardID; // string
  public $TrainerID; // int
  public $AppointmentDate; // string
  public $StartTime; // string
  public $EndTime; // string
  public $Resources; // ArrayOfResource
  public $Notes; // string
  public $LastModifiedByEmployeeID; // int
  public $LastModifiedByEmployeeName; // string
  public $LastModifiedTimestamp; // string
  public $StudioID; // int
  public $Status; // AppointmentStatusDetail
}
?>