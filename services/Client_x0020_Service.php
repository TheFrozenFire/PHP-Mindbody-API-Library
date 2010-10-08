<?php
class Client_x0020_Service extends SoapClient {

  private static $classmap = array(
                                    'getClient' => 'getClient',
                                    'getClientResponse' => 'getClientResponse',
                                    'Result_Client' => 'Result_Client',
                                    'Result' => 'Result',
                                    'Option' => 'Option',
                                    'ErrorCode' => 'ErrorCode',
                                    'Client' => 'Client',
                                    'ClientIndex' => 'ClientIndex',
                                    'ClientIndexValue' => 'ClientIndexValue',
                                    'getMembershipStatuses' => 'getMembershipStatuses',
                                    'getMembershipStatusesResponse' => 'getMembershipStatusesResponse',
                                    'Result_MembershipStatuses' => 'Result_MembershipStatuses',
                                    'MembershipStatus' => 'MembershipStatus',
                                    'getClientFitRewards' => 'getClientFitRewards',
                                    'getClientFitRewardsResponse' => 'getClientFitRewardsResponse',
                                    'getClientHasContract' => 'getClientHasContract',
                                    'getClientHasContractResponse' => 'getClientHasContractResponse',
                                    'Result_Bool' => 'Result_Bool',
                                    'getClientHasMembership' => 'getClientHasMembership',
                                    'getClientHasMembershipResponse' => 'getClientHasMembershipResponse',
                                    'getClientActiveMembership' => 'getClientActiveMembership',
                                    'getClientActiveMembershipResponse' => 'getClientActiveMembershipResponse',
                                    'Result_Membership' => 'Result_Membership',
                                    'Membership' => 'Membership',
                                    'Payment' => 'Payment',
                                    'TypeGroup' => 'TypeGroup',
                                    'ScheduleType' => 'ScheduleType',
                                    'getCurrentClientPayment' => 'getCurrentClientPayment',
                                    'getCurrentClientPaymentResponse' => 'getCurrentClientPaymentResponse',
                                    'Result_Payment' => 'Result_Payment',
                                    'updatePaymentActivation' => 'updatePaymentActivation',
                                    'updatePaymentActivationResponse' => 'updatePaymentActivationResponse',
                                    'getClientTypeList' => 'getClientTypeList',
                                    'getClientTypeListResponse' => 'getClientTypeListResponse',
                                    'Result_ClientTypeList' => 'Result_ClientTypeList',
                                    'ClientType' => 'ClientType',
                                    'getCardIDHistory' => 'getCardIDHistory',
                                    'getCardIDHistoryResponse' => 'getCardIDHistoryResponse',
                                    'Result_StringList' => 'Result_StringList',
                                    'getClientIndexes' => 'getClientIndexes',
                                    'getClientIndexesResponse' => 'getClientIndexesResponse',
                                    'Result_ClientIndexList' => 'Result_ClientIndexList',
                                    'getClientIndexesOnClient' => 'getClientIndexesOnClient',
                                    'getClientIndexesOnClientResponse' => 'getClientIndexesOnClientResponse',
                                    'ValidateUserLogin' => 'ValidateUserLogin',
                                    'ValidateUserLoginResponse' => 'ValidateUserLoginResponse',
                                    'Result_AutoLogin' => 'Result_AutoLogin',
                                    'AutoLogin' => 'AutoLogin',
                                    'getClientReferralTypes' => 'getClientReferralTypes',
                                    'getClientReferralTypesResponse' => 'getClientReferralTypesResponse',
                                    'addArrivalEntry' => 'addArrivalEntry',
                                    'addArrivalEntryResponse' => 'addArrivalEntryResponse',
                                    'addClient' => 'addClient',
                                    'addClientResponse' => 'addClientResponse',
                                    'Result_Int' => 'Result_Int',
                                    'updateClient' => 'updateClient',
                                    'UpdateAction' => 'UpdateAction',
                                    'updateClientResponse' => 'updateClientResponse',
                                    'updateClientWithLoginInformation' => 'updateClientWithLoginInformation',
                                    'updateClientWithLoginInformationResponse' => 'updateClientWithLoginInformationResponse',
                                    'Result_String' => 'Result_String',
                                    'updateClientIndexOnClient' => 'updateClientIndexOnClient',
                                    'updateClientIndexOnClientResponse' => 'updateClientIndexOnClientResponse',
                                    'updateClientTypeOnClient' => 'updateClientTypeOnClient',
                                    'updateClientTypeOnClientResponse' => 'updateClientTypeOnClientResponse',
                                    'updateLoginNameAndPassword' => 'updateLoginNameAndPassword',
                                    'updateLoginNameAndPasswordResponse' => 'updateLoginNameAndPasswordResponse',
                                    'updatePassword' => 'updatePassword',
                                    'updatePasswordResponse' => 'updatePasswordResponse',
                                    'updateClientMembershipStatus' => 'updateClientMembershipStatus',
                                    'updateClientMembershipStatusResponse' => 'updateClientMembershipStatusResponse',
                                    'Hotword' => 'Hotword',
                                    'Hotwords' => 'Hotwords',
                                   );

  public function Client_x0020_Service($wsdl = "http://clients.mindbodyonline.com/api/0_4/ClientService.asmx?WSDL", $options = array()) {
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
   * Accepts a Card_ID (i.e. RSSID) and returns a Client_Result containing a client record 
   * on success and an error message on failure. 
   *
   * @param getClient $parameters
   * @return getClientResponse
   */
  public function getClient(getClient $parameters) {
    return $this->__soapCall('getClient', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Returns a list of available membership statuses. 
   *
   * @param getMembershipStatuses $parameters
   * @return getMembershipStatusesResponse
   */
  public function getMembershipStatuses(getMembershipStatuses $parameters) {
    return $this->__soapCall('getMembershipStatuses', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * For fitRewards! only.  Accepts a Card_ID (i.e. MembershipID) and returns a Client_Result 
   * containing a client record on success and an error message on failure.  Card_ID is in 
   * the format of StudioIdentifier_MembershipID (example: SampleYoga_01234567). 
   *
   * @param getClientFitRewards $parameters
   * @return getClientFitRewardsResponse
   */
  public function getClientFitRewards(getClientFitRewards $parameters) {
    return $this->__soapCall('getClientFitRewards', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Accepts a CardID (also known as an RSSID) and checks if the associated client has a valid 
   * and current, non-suspended contract.  Returns a boolean result on success or a false and 
   * error message on failure. 
   *
   * @param getClientHasContract $parameters
   * @return getClientHasContractResponse
   */
  public function getClientHasContract(getClientHasContract $parameters) {
    return $this->__soapCall('getClientHasContract', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Accepts a CardID (also known as an RSSID) and checks if the associated client has a valid 
   * and current membership.  Returns a boolean result on success or a false and error message 
   * on failure. 
   *
   * @param getClientHasMembership $parameters
   * @return getClientHasMembershipResponse
   */
  public function getClientHasMembership(getClientHasMembership $parameters) {
    return $this->__soapCall('getClientHasMembership', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Accepts a CardID (also known as an RSSID) and checks if the associated client has a valid 
   * and current membership.  Returns the active membership result (nothing if they have none) 
   * on success OR an error message on failure. 
   *
   * @param getClientActiveMembership $parameters
   * @return getClientActiveMembershipResponse
   */
  public function getClientActiveMembership(getClientActiveMembership $parameters) {
    return $this->__soapCall('getClientActiveMembership', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Accepts a CardID (also known as an RSSID) and returns a current client payment given the 
   * input parameters. This methods returns the payment result (nothing if they have none) 
   * on success OR an error message on failure. TypeGroupID, StartDate, EndDate are required 
   * fields. VisitTypeID, LocationID are optional and a value of 0 will not filter results. 
   * 
   *
   * @param getCurrentClientPayment $parameters
   * @return getCurrentClientPaymentResponse
   */
  public function getCurrentClientPayment(getCurrentClientPayment $parameters) {
    return $this->__soapCall('getCurrentClientPayment', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Accepts a CardID (also known as an RSSID), the PaymentID of a Payment on their account, 
   * and updates it with the given date information.  Returns a boolean result on success or 
   * a false and error message on failure. 
   *
   * @param updatePaymentActivation $parameters
   * @return updatePaymentActivationResponse
   */
  public function updatePaymentActivation(updatePaymentActivation $parameters) {
    return $this->__soapCall('updatePaymentActivation', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieves the list of client types (also known as student types) that can be assigned 
   * to a client. 
   *
   * @param getClientTypeList $parameters
   * @return getClientTypeListResponse
   */
  public function getClientTypeList(getClientTypeList $parameters) {
    return $this->__soapCall('getClientTypeList', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Retrieve the current Card_ID along with the history of Card_IDs based on the supplied 
   * Card_ID.  Current Card_ID is first element. 
   *
   * @param getCardIDHistory $parameters
   * @return getCardIDHistoryResponse
   */
  public function getCardIDHistory(getCardIDHistory $parameters) {
    return $this->__soapCall('getCardIDHistory', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Returns a list of all active client indexes and their values. 
   *
   * @param getClientIndexes $parameters
   * @return getClientIndexesResponse
   */
  public function getClientIndexes(getClientIndexes $parameters) {
    return $this->__soapCall('getClientIndexes', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Returns a list of all active client indexes and their associated values assigned to the 
   * specified client. 
   *
   * @param getClientIndexesOnClient $parameters
   * @return getClientIndexesOnClientResponse
   */
  public function getClientIndexesOnClient(getClientIndexesOnClient $parameters) {
    return $this->__soapCall('getClientIndexesOnClient', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Accepts a User's Login and Password and returns a Client_Result containing a client record 
   * on success and an error message on failure. 
   *
   * @param ValidateUserLogin $parameters
   * @return ValidateUserLoginResponse
   */
  public function ValidateUserLogin(ValidateUserLogin $parameters) {
    return $this->__soapCall('ValidateUserLogin', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Accepts a User's Login and Password and returns a Client_Result containing a client record 
   * on success and an error message on failure. 
   *
   * @param getClientReferralTypes $parameters
   * @return getClientReferralTypesResponse
   */
  public function getClientReferralTypes(getClientReferralTypes $parameters) {
    return $this->__soapCall('getClientReferralTypes', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Adds an arrival record for the specified client at the specified location.  Arrival records 
   * are viewable in the Entry Logs report. 
   *
   * @param addArrivalEntry $parameters
   * @return addArrivalEntryResponse
   */
  public function addArrivalEntry(addArrivalEntry $parameters) {
    return $this->__soapCall('addArrivalEntry', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Adds a client to the database and returns the client ID on success.  Country and State 
   * can be left blank-- they will be replaced by default as set in MindBody Online.  Card_ID 
   * maps to the RSSID field in the MindBody Online database.   If Constant Contact integration 
   * is enabled, will add to the appropriate Constant Contact list. 
   *
   * @param addClient $parameters
   * @return addClientResponse
   */
  public function addClient(addClient $parameters) {
    return $this->__soapCall('addClient', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Updates a client record with the given profile information. Unspecified fields will be 
   * set to null. Boolean fields must have a value. The 'ClientNotFoundAction' parameter specifies 
   * the action to be taken if a match for the specified Card_ID is not found: a value of 'Add_New' 
   * will insert a new client record, a value of 'Fail' will return a failure message. 
   *
   * @param updateClient $parameters
   * @return updateClientResponse
   */
  public function updateClient(updateClient $parameters) {
    return $this->__soapCall('updateClient', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Updates a client record with the given profile information and returns the Card_ID of 
   * the client record that was successfully added or updated. Unspecified fields will be set 
   * to null. Boolean fields must have a value. The 'ClientNotFoundAction' parameter specifies 
   * the action to be taken if a match for the specified Card_ID is not found: a value of 'Add_New' 
   * will insert a new client record, a value of 'Fail' will return a failure message.The UserName 
   * will be checked for uniqueness and UserPassword will be validated for complexity requirements. 
   * If they are both valid (and the rest of the client information is valid), the client record 
   * will be added or updated. 
   *
   * @param updateClientWithLoginInformation $parameters
   * @return updateClientWithLoginInformationResponse
   */
  public function updateClientWithLoginInformation(updateClientWithLoginInformation $parameters) {
    return $this->__soapCall('updateClientWithLoginInformation', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Assign or remove a client index on a specific client.  If assign is set to true, assigns 
   * a client index value to a client-- otherwise remove.  Use getClientIndexes to retrieve 
   * valid client index values. 
   *
   * @param updateClientIndexOnClient $parameters
   * @return updateClientIndexOnClientResponse
   */
  public function updateClientIndexOnClient(updateClientIndexOnClient $parameters) {
    return $this->__soapCall('updateClientIndexOnClient', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Assign (or remove) a client type to a client record.  Retrieve valid client types by using 
   * getClientTypeList. 
   *
   * @param updateClientTypeOnClient $parameters
   * @return updateClientTypeOnClientResponse
   */
  public function updateClientTypeOnClient(updateClientTypeOnClient $parameters) {
    return $this->__soapCall('updateClientTypeOnClient', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Updates a client record with the specified loginname and password to be used for logging 
   * into MindBodyOnline.  Will not update if loginname is already in use by this or any other 
   * client and / or password complexity requirement not met. 
   *
   * @param updateLoginNameAndPassword $parameters
   * @return updateLoginNameAndPasswordResponse
   */
  public function updateLoginNameAndPassword(updateLoginNameAndPassword $parameters) {
    return $this->__soapCall('updateLoginNameAndPassword', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * Updates a client record with the specified password.  Will not update if password does 
   * not meet complexity requirement. 
   *
   * @param updatePassword $parameters
   * @return updatePasswordResponse
   */
  public function updatePassword(updatePassword $parameters) {
    return $this->__soapCall('updatePassword', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

  /**
   * assigns the given membership status to the given client. 
   *
   * @param updateClientMembershipStatus $parameters
   * @return updateClientMembershipStatusResponse
   */
  public function updateClientMembershipStatus(updateClientMembershipStatus $parameters) {
    return $this->__soapCall('updateClientMembershipStatus', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/API/0_4',
            'soapaction' => ''
           )
      );
  }

}
?>