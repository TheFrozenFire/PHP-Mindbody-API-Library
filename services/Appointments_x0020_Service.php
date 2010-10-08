<?php
class Appointments_x0020_Service extends SoapClient {

  private static $classmap = array(
                                    'getAppointment' => 'getAppointment',
                                    'getAppointmentResponse' => 'getAppointmentResponse',
                                    'Result_Appointment' => 'Result_Appointment',
                                    'Result' => 'Result',
                                    'Option' => 'Option',
                                    'ErrorCode' => 'ErrorCode',
                                    'Appointment' => 'Appointment',
                                    'Resource' => 'Resource',
                                    'AppointmentStatusDetail' => 'AppointmentStatusDetail',
                                    'getAppointments' => 'getAppointments',
                                    'getAppointmentsResponse' => 'getAppointmentsResponse',
                                    'Result_AppointmentsNew' => 'Result_AppointmentsNew',
                                    'AppointmentNew' => 'AppointmentNew',
                                    'Location' => 'Location',
                                    'Trainer' => 'Trainer',
                                    'Client' => 'Client',
                                    'ClientIndex' => 'ClientIndex',
                                    'ClientIndexValue' => 'ClientIndexValue',
                                    'AppointmentStatus' => 'AppointmentStatus',
                                    'getAppointmentByCardID' => 'getAppointmentByCardID',
                                    'getAppointmentByCardIDResponse' => 'getAppointmentByCardIDResponse',
                                    'Result_Appointments' => 'Result_Appointments',
                                    'Hotword' => 'Hotword',
                                    'Hotwords' => 'Hotwords',
                                   );

  public function Appointments_x0020_Service($wsdl = "http://clients.mindbodyonline.com/api/0_4/AppointmentService.asmx?WSDL", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    $directory = dirname(__FILE__).DIRECTORY_SEPARATOR;
	foreach($options['classmap'] as $key => $value) if(file_exists("{$directory}../structures/{$value}.php")) include_once("{$directory}../structures/{$value}.php");
    parent::__construct($wsdl, $options);
  }

  /**
   * Retrieves an appointment. Appointment record is returned in a Result_Appointment data 
   * type which also contains error codes and/or messages in relation to retreiving the appointment 
   * record. 
   *
   * @param getAppointment $parameters
   * @return getAppointmentResponse
   */
  public function getAppointment(getAppointment $parameters) {
    return $this->__soapCall('getAppointment', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieves an appointment. Appointment record is returned in a Result_Appointment data 
   * type which also contains error codes and/or messages in relation to retreiving the appointment 
   * record. 
   *
   * @param getAppointments $parameters
   * @return getAppointmentsResponse
   */
  public function getAppointments(getAppointments $parameters) {
    return $this->__soapCall('getAppointments', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieves all appointment records for the specified client.  Retrieves records for past 
   * and future appointments based on submitted criteria (DaysOfApptsFuture / DaysOfApptsPast) 
   * in relation to current date.  Appointment records are returned in a Result_Appointments 
   * data type which also contains error codes and/or messages in relation to retreiving the 
   * appointment records.  Studio ID wild card compatible. 
   *
   * @param getAppointmentByCardID $parameters
   * @return getAppointmentByCardIDResponse
   */
  public function getAppointmentByCardID(getAppointmentByCardID $parameters) {
    return $this->__soapCall('getAppointmentByCardID', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

}
?>