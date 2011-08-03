<?php
class AddClientsToEnrollmentsRequest {
  public $ClientIDs; // ArrayOfString
  public $ClassScheduleIDs; // ArrayOfInt
  public $EnrollDateForward; // dateTime
  public $EnrollOpen; // ArrayOfDateTime
  public $Test; // boolean
}
?>