<?php
namespace MindbodyAPI\services;
use MindbodyAPI\structures;
class ClientService extends \MindbodyAPI\MindbodyClient {
	const WSDL_FILE = "https://api.mindbodyonline.com/0_5/ClientService.asmx?WSDL";
	private $classmap = array(
		'AddArrival' => 'MindbodyAPI\structures\AddArrival',
		'AddArrivalRequest' => 'MindbodyAPI\structures\AddArrivalRequest',
		'MBRequest' => 'MindbodyAPI\structures\MBRequest',
		'SourceCredentials' => 'MindbodyAPI\structures\SourceCredentials',
		'UserCredentials' => 'MindbodyAPI\structures\UserCredentials',
		'XMLDetailLevel' => 'MindbodyAPI\structures\XMLDetailLevel',
		'AddArrivalResponse' => 'MindbodyAPI\structures\AddArrivalResponse',
		'AddArrivalResult' => 'MindbodyAPI\structures\AddArrivalResult',
		'MBResult' => 'MindbodyAPI\structures\MBResult',
		'StatusCode' => 'MindbodyAPI\structures\StatusCode',
		'ClientService' => 'MindbodyAPI\structures\ClientService',
		'MBObject' => 'MindbodyAPI\structures\MBObject',
		'Site' => 'MindbodyAPI\structures\Site',
		'Program' => 'MindbodyAPI\structures\Program',
		'ScheduleType' => 'MindbodyAPI\structures\ScheduleType',
		'ActionCode' => 'MindbodyAPI\structures\ActionCode',
		'AddOrUpdateClients' => 'MindbodyAPI\structures\AddOrUpdateClients',
		'AddOrUpdateClientsRequest' => 'MindbodyAPI\structures\AddOrUpdateClientsRequest',
		'Client' => 'MindbodyAPI\structures\Client',
		'ClientIndex' => 'MindbodyAPI\structures\ClientIndex',
		'ClientIndexValue' => 'MindbodyAPI\structures\ClientIndexValue',
		'ClientCreditCard' => 'MindbodyAPI\structures\ClientCreditCard',
		'ClientRelationship' => 'MindbodyAPI\structures\ClientRelationship',
		'Relationship' => 'MindbodyAPI\structures\Relationship',
		'Rep' => 'MindbodyAPI\structures\Rep',
		'Staff' => 'MindbodyAPI\structures\Staff',
		'Appointment' => 'MindbodyAPI\structures\Appointment',
		'ScheduleItem' => 'MindbodyAPI\structures\ScheduleItem',
		'Unavailability' => 'MindbodyAPI\structures\Unavailability',
		'Availability' => 'MindbodyAPI\structures\Availability',
		'SessionType' => 'MindbodyAPI\structures\SessionType',
		'Location' => 'MindbodyAPI\structures\Location',
		'AppointmentStatus' => 'MindbodyAPI\structures\AppointmentStatus',
		'Resource' => 'MindbodyAPI\structures\Resource',
		'ProviderIDUpdate' => 'MindbodyAPI\structures\ProviderIDUpdate',
		'CustomClientField' => 'MindbodyAPI\structures\CustomClientField',
		'AddOrUpdateClientsResponse' => 'MindbodyAPI\structures\AddOrUpdateClientsResponse',
		'AddOrUpdateClientsResult' => 'MindbodyAPI\structures\AddOrUpdateClientsResult',
		'GetClients' => 'MindbodyAPI\structures\GetClients',
		'GetClientsRequest' => 'MindbodyAPI\structures\GetClientsRequest',
		'GetClientsResponse' => 'MindbodyAPI\structures\GetClientsResponse',
		'GetClientsResult' => 'MindbodyAPI\structures\GetClientsResult',
		'GetCustomClientFields' => 'MindbodyAPI\structures\GetCustomClientFields',
		'GetCustomClientFieldsRequest' => 'MindbodyAPI\structures\GetCustomClientFieldsRequest',
		'GetCustomClientFieldsResponse' => 'MindbodyAPI\structures\GetCustomClientFieldsResponse',
		'GetCustomClientFieldsResult' => 'MindbodyAPI\structures\GetCustomClientFieldsResult',
		'GetClientIndexes' => 'MindbodyAPI\structures\GetClientIndexes',
		'GetClientIndexesRequest' => 'MindbodyAPI\structures\GetClientIndexesRequest',
		'GetClientIndexesResponse' => 'MindbodyAPI\structures\GetClientIndexesResponse',
		'GetClientIndexesResult' => 'MindbodyAPI\structures\GetClientIndexesResult',
		'GetClientContactLogs' => 'MindbodyAPI\structures\GetClientContactLogs',
		'GetClientContactLogsRequest' => 'MindbodyAPI\structures\GetClientContactLogsRequest',
		'GetClientContactLogsResponse' => 'MindbodyAPI\structures\GetClientContactLogsResponse',
		'GetClientContactLogsResult' => 'MindbodyAPI\structures\GetClientContactLogsResult',
		'ContactLog' => 'MindbodyAPI\structures\ContactLog',
		'ContactLogComment' => 'MindbodyAPI\structures\ContactLogComment',
		'ContactLogType' => 'MindbodyAPI\structures\ContactLogType',
		'ContactLogSubtype' => 'MindbodyAPI\structures\ContactLogSubtype',
		'AddOrUpdateContactLogs' => 'MindbodyAPI\structures\AddOrUpdateContactLogs',
		'AddOrUpdateContactLogsRequest' => 'MindbodyAPI\structures\AddOrUpdateContactLogsRequest',
		'AddOrUpdateContactLogsResponse' => 'MindbodyAPI\structures\AddOrUpdateContactLogsResponse',
		'AddOrUpdateContactLogsResult' => 'MindbodyAPI\structures\AddOrUpdateContactLogsResult',
		'GetContactLogTypes' => 'MindbodyAPI\structures\GetContactLogTypes',
		'GetContactLogTypesRequest' => 'MindbodyAPI\structures\GetContactLogTypesRequest',
		'GetContactLogTypesResponse' => 'MindbodyAPI\structures\GetContactLogTypesResponse',
		'GetContactLogTypesResult' => 'MindbodyAPI\structures\GetContactLogTypesResult',
		'UploadClientDocument' => 'MindbodyAPI\structures\UploadClientDocument',
		'UploadClientDocumentRequest' => 'MindbodyAPI\structures\UploadClientDocumentRequest',
		'UploadClientDocumentResponse' => 'MindbodyAPI\structures\UploadClientDocumentResponse',
		'UploadClientDocumentResult' => 'MindbodyAPI\structures\UploadClientDocumentResult',
		'GetClientFormulaNotes' => 'MindbodyAPI\structures\GetClientFormulaNotes',
		'GetClientFormulaNotesRequest' => 'MindbodyAPI\structures\GetClientFormulaNotesRequest',
		'GetClientFormulaNotesResponse' => 'MindbodyAPI\structures\GetClientFormulaNotesResponse',
		'GetClientFormulaNotesResult' => 'MindbodyAPI\structures\GetClientFormulaNotesResult',
		'FormulaNote' => 'MindbodyAPI\structures\FormulaNote',
		'AddClientFormulaNote' => 'MindbodyAPI\structures\AddClientFormulaNote',
		'AddClientFormulaNoteRequest' => 'MindbodyAPI\structures\AddClientFormulaNoteRequest',
		'AddClientFormulaNoteResponse' => 'MindbodyAPI\structures\AddClientFormulaNoteResponse',
		'AddClientFormulaNoteResult' => 'MindbodyAPI\structures\AddClientFormulaNoteResult',
		'DeleteClientFormulaNote' => 'MindbodyAPI\structures\DeleteClientFormulaNote',
		'DeleteCientFormulaNoteRequest' => 'MindbodyAPI\structures\DeleteCientFormulaNoteRequest',
		'DeleteClientFormulaNoteResponse' => 'MindbodyAPI\structures\DeleteClientFormulaNoteResponse',
		'DeleteClientFormulaNoteResult' => 'MindbodyAPI\structures\DeleteClientFormulaNoteResult',
		'GetClientReferralTypes' => 'MindbodyAPI\structures\GetClientReferralTypes',
		'GetClientReferralTypesRequest' => 'MindbodyAPI\structures\GetClientReferralTypesRequest',
		'GetClientReferralTypesResponse' => 'MindbodyAPI\structures\GetClientReferralTypesResponse',
		'GetClientReferralTypesResult' => 'MindbodyAPI\structures\GetClientReferralTypesResult',
		'GetActiveClientMemberships' => 'MindbodyAPI\structures\GetActiveClientMemberships',
		'GetActiveClientMembershipsRequest' => 'MindbodyAPI\structures\GetActiveClientMembershipsRequest',
		'GetActiveClientMembershipsResponse' => 'MindbodyAPI\structures\GetActiveClientMembershipsResponse',
		'GetActiveClientMembershipsResult' => 'MindbodyAPI\structures\GetActiveClientMembershipsResult',
		'ClientMembership' => 'MindbodyAPI\structures\ClientMembership',
		'GetClientContracts' => 'MindbodyAPI\structures\GetClientContracts',
		'GetClientContractsRequest' => 'MindbodyAPI\structures\GetClientContractsRequest',
		'GetClientContractsResponse' => 'MindbodyAPI\structures\GetClientContractsResponse',
		'GetClientContractsResult' => 'MindbodyAPI\structures\GetClientContractsResult',
		'ClientContract' => 'MindbodyAPI\structures\ClientContract',
		'GetClientAccountBalances' => 'MindbodyAPI\structures\GetClientAccountBalances',
		'GetClientAccountBalancesRequest' => 'MindbodyAPI\structures\GetClientAccountBalancesRequest',
		'GetClientAccountBalancesResponse' => 'MindbodyAPI\structures\GetClientAccountBalancesResponse',
		'GetClientAccountBalancesResult' => 'MindbodyAPI\structures\GetClientAccountBalancesResult',
		'GetClientServices' => 'MindbodyAPI\structures\GetClientServices',
		'GetClientServicesRequest' => 'MindbodyAPI\structures\GetClientServicesRequest',
		'GetClientServicesResponse' => 'MindbodyAPI\structures\GetClientServicesResponse',
		'GetClientServicesResult' => 'MindbodyAPI\structures\GetClientServicesResult',
		'GetClientVisits' => 'MindbodyAPI\structures\GetClientVisits',
		'GetClientVisitsRequest' => 'MindbodyAPI\structures\GetClientVisitsRequest',
		'GetClientVisitsResponse' => 'MindbodyAPI\structures\GetClientVisitsResponse',
		'GetClientVisitsResult' => 'MindbodyAPI\structures\GetClientVisitsResult',
		'Visit' => 'MindbodyAPI\structures\Visit',
		'GetClientPurchases' => 'MindbodyAPI\structures\GetClientPurchases',
		'GetClientPurchasesRequest' => 'MindbodyAPI\structures\GetClientPurchasesRequest',
		'GetClientPurchasesResponse' => 'MindbodyAPI\structures\GetClientPurchasesResponse',
		'GetClientPurchasesResult' => 'MindbodyAPI\structures\GetClientPurchasesResult',
		'SaleItem' => 'MindbodyAPI\structures\SaleItem',
		'Sale' => 'MindbodyAPI\structures\Sale',
		'Payment' => 'MindbodyAPI\structures\Payment',
		'GetClientSchedule' => 'MindbodyAPI\structures\GetClientSchedule',
		'GetClientScheduleRequest' => 'MindbodyAPI\structures\GetClientScheduleRequest',
		'GetClientScheduleResponse' => 'MindbodyAPI\structures\GetClientScheduleResponse',
		'GetClientScheduleResult' => 'MindbodyAPI\structures\GetClientScheduleResult',
		'GetRequiredClientFields' => 'MindbodyAPI\structures\GetRequiredClientFields',
		'GetRequiredClientFieldsRequest' => 'MindbodyAPI\structures\GetRequiredClientFieldsRequest',
		'GetRequiredClientFieldsResponse' => 'MindbodyAPI\structures\GetRequiredClientFieldsResponse',
		'GetRequiredClientFieldsResult' => 'MindbodyAPI\structures\GetRequiredClientFieldsResult',
		'ValidateLogin' => 'MindbodyAPI\structures\ValidateLogin',
		'ValidateLoginRequest' => 'MindbodyAPI\structures\ValidateLoginRequest',
		'ValidateLoginResponse' => 'MindbodyAPI\structures\ValidateLoginResponse',
		'ValidateLoginResult' => 'MindbodyAPI\structures\ValidateLoginResult',
		'UpdateClientServices' => 'MindbodyAPI\structures\UpdateClientServices',
		'UpdateClientServicesRequest' => 'MindbodyAPI\structures\UpdateClientServicesRequest',
		'UpdateClientServicesResponse' => 'MindbodyAPI\structures\UpdateClientServicesResponse',
		'UpdateClientServicesResult' => 'MindbodyAPI\structures\UpdateClientServicesResult',
		'SendUserNewPassword' => 'MindbodyAPI\structures\SendUserNewPassword',
		'ClientSendUserNewPasswordRequest' => 'MindbodyAPI\structures\ClientSendUserNewPasswordRequest',
		'SendUserNewPasswordResponse' => 'MindbodyAPI\structures\SendUserNewPasswordResponse',
		'ClientSendUserNewPasswordResult' => 'MindbodyAPI\structures\ClientSendUserNewPasswordResult',
	);
	public function __construct($wsdl = null, $options = array()) {
		foreach ($this->classmap as $key => $value) {
			if (!isset($options['classmap'][$key])) {
				$options['classmap'][$key] = $value;
			}
		}
		if (isset($options['headers'])) {
			$this->__setSoapHeaders($options['headers']);
		}
		parent::__construct($wsdl ? : self::WSDL_FILE, $options);
	}
	/**
	 * Adds an arrival record for the given client.
	 *
	 * @param AddArrival $parameters
	 * @return AddArrivalResponse
	 */
	public function AddArrival(structures\AddArrival $parameters) {
		return $this->__soapCall('AddArrival', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Adds or updates information for a list of clients.
	 *
	 * @param AddOrUpdateClients $parameters
	 * @return AddOrUpdateClientsResponse
	 */
	public function AddOrUpdateClients(structures\AddOrUpdateClients $parameters) {
		return $this->__soapCall('AddOrUpdateClients', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a list of clients.
	 *
	 * @param GetClients $parameters
	 * @return GetClientsResponse
	 */
	public function GetClients(structures\GetClients $parameters) {
		return $this->__soapCall('GetClients', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a list of currently available client indexes.
	 *
	 * @param GetCustomClientFields $parameters
	 * @return GetCustomClientFieldsResponse
	 */
	public function GetCustomClientFields(structures\GetCustomClientFields $parameters) {
		return $this->__soapCall('GetCustomClientFields', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a list of currently available client indexes.
	 *
	 * @param GetClientIndexes $parameters
	 * @return GetClientIndexesResponse
	 */
	public function GetClientIndexes(structures\GetClientIndexes $parameters) {
		return $this->__soapCall('GetClientIndexes', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Get contact logs for a client.
	 *
	 * @param GetClientContactLogs $parameters
	 * @return GetClientContactLogsResponse
	 */
	public function GetClientContactLogs(structures\GetClientContactLogs $parameters) {
		return $this->__soapCall('GetClientContactLogs', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Add or update client contact logs.
	 *
	 * @param AddOrUpdateContactLogs $parameters
	 * @return AddOrUpdateContactLogsResponse
	 */
	public function AddOrUpdateContactLogs(structures\AddOrUpdateContactLogs $parameters) {
		return $this->__soapCall('AddOrUpdateContactLogs', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Get contact log types for a client.
	 *
	 * @param GetContactLogTypes $parameters
	 * @return GetContactLogTypesResponse
	 */
	public function GetContactLogTypes(structures\GetContactLogTypes $parameters) {
		return $this->__soapCall('GetContactLogTypes', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Upload a client document.
	 *
	 * @param UploadClientDocument $parameters
	 * @return UploadClientDocumentResponse
	 */
	public function UploadClientDocument(structures\UploadClientDocument $parameters) {
		return $this->__soapCall('UploadClientDocument', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a list of client formula notes.
	 *
	 * @param GetClientFormulaNotes $parameters
	 * @return GetClientFormulaNotesResponse
	 */
	public function GetClientFormulaNotes(structures\GetClientFormulaNotes $parameters) {
		return $this->__soapCall('GetClientFormulaNotes', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Adds a formula note to a client.
	 *
	 * @param AddClientFormulaNote $parameters
	 * @return AddClientFormulaNoteResponse
	 */
	public function AddClientFormulaNote(structures\AddClientFormulaNote $parameters) {
		return $this->__soapCall('AddClientFormulaNote', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Deletes a formula note to a client.
	 *
	 * @param DeleteClientFormulaNote $parameters
	 * @return DeleteClientFormulaNoteResponse
	 */
	public function DeleteClientFormulaNote(structures\DeleteClientFormulaNote $parameters) {
		return $this->__soapCall('DeleteClientFormulaNote', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a list of clients.
	 *
	 * @param GetClientReferralTypes $parameters
	 * @return GetClientReferralTypesResponse
	 */
	public function GetClientReferralTypes(structures\GetClientReferralTypes $parameters) {
		return $this->__soapCall('GetClientReferralTypes', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets the active membership for a given client.
	 *
	 * @param GetActiveClientMemberships $parameters
	 * @return GetActiveClientMembershipsResponse
	 */
	public function GetActiveClientMemberships(structures\GetActiveClientMemberships $parameters) {
		return $this->__soapCall('GetActiveClientMemberships', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a list of contracts for a given client.
	 *
	 * @param GetClientContracts $parameters
	 * @return GetClientContractsResponse
	 */
	public function GetClientContracts(structures\GetClientContracts $parameters) {
		return $this->__soapCall('GetClientContracts', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets account balances for the given clients.
	 *
	 * @param GetClientAccountBalances $parameters
	 * @return GetClientAccountBalancesResponse
	 */
	public function GetClientAccountBalances(structures\GetClientAccountBalances $parameters) {
		return $this->__soapCall('GetClientAccountBalances', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Gets a client service for a given client.
	 *
	 * @param GetClientServices $parameters
	 * @return GetClientServicesResponse
	 */
	public function GetClientServices(structures\GetClientServices $parameters) {
		return $this->__soapCall('GetClientServices', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Get visits for a client.
	 *
	 * @param GetClientVisits $parameters
	 * @return GetClientVisitsResponse
	 */
	public function GetClientVisits(structures\GetClientVisits $parameters) {
		return $this->__soapCall('GetClientVisits', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Get purchases for a client.
	 *
	 * @param GetClientPurchases $parameters
	 * @return GetClientPurchasesResponse
	 */
	public function GetClientPurchases(structures\GetClientPurchases $parameters) {
		return $this->__soapCall('GetClientPurchases', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Get visits for a client.
	 *
	 * @param GetClientSchedule $parameters
	 * @return GetClientScheduleResponse
	 */
	public function GetClientSchedule(structures\GetClientSchedule $parameters) {
		return $this->__soapCall('GetClientSchedule', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Updates a client service for a given client.
	 *
	 * @param GetRequiredClientFields $parameters
	 * @return GetRequiredClientFieldsResponse
	 */
	public function GetRequiredClientFields(structures\GetRequiredClientFields $parameters) {
		return $this->__soapCall('GetRequiredClientFields', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Validates a username and password. This method returns the associated clients record and
	 * a session guid on success.
	 *
	 * @param ValidateLogin $parameters
	 * @return ValidateLoginResponse
	 */
	public function ValidateLogin(structures\ValidateLogin $parameters) {
		return $this->__soapCall('ValidateLogin', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Updates a client service for a given client.
	 *
	 * @param UpdateClientServices $parameters
	 * @return UpdateClientServicesResponse
	 */
	public function UpdateClientServices(structures\UpdateClientServices $parameters) {
		return $this->__soapCall('UpdateClientServices', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
	/**
	 * Sends the user a new password.
	 *
	 * @param SendUserNewPassword $parameters
	 * @return SendUserNewPasswordResponse
	 */
	public function SendUserNewPassword(structures\SendUserNewPassword $parameters) {
		return $this->__soapCall('SendUserNewPassword', array(
			$parameters
		) , array(
			'uri' => 'http://clients.mindbodyonline.com/api/0_5',
			'soapaction' => ''
		));
	}
}
?>