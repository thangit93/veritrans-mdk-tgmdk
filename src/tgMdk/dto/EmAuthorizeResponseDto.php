<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：電子マネー、コマンド名：決済の応答Dtoクラス
 *
 * @author Veritrans, Inc.
 *
 */
class EmAuthorizeResponseDto extends MdkBaseDto
{

    /**
     * 決済サービスタイプ<br>
     */
    private $serviceType;

    /**
     * 処理結果コード<br>
     * 半角英数字<br>
     * 32 文字以内<br>
     * 決済処理後、応答電文に含まれる値。<br>
     * 以下の処理結果のいずれかが格納される<br>
     * ・success：正常終了<br>
     * ・failure：異常終了<br>
     * ・pending：保留状態<br>
     */
    private $mstatus;

    /**
     * 詳細結果コード<br>
     * 半角英数字<br>
     * 16 文字以内<br>
     * 結果コード<br>
     * 例) E001000100000000<br>
     */
    private $vResultCode;

    /**
     * エラーメッセージ<br>
     * 文字列<br>
     * 1024 バイト以内<br>
     * エラーメッセージ<br>
     */
    private $merrMsg;

    /**
     * 電文ID<br>
     */
    private $marchTxn;

    /**
     * 取引ID<br>
     * 半角英数字<br>
     * 100 文字以内<br>
     * マーチャント側で取引を一意に表す注文管理ID<br>
     */
    private $orderId;

    /**
     * 取引毎に付くID<br>
     */
    private $custTxn;

    /**
     * 受付番号<br>
     * 半角英数字<br>
     * 64文字以内<br>
     * 決済センターへ正常に決済請求が完了した際に決済センターで採番される受付番号<br>
     * <p>
     */
    private $receiptNo;

    /**
     * 請求番号<br>
     * 半角英数字<br>
     * 25文字以内<br>
     * GWが発番する請求に対するIDが格納されます。<br>
     * <p>
     */
    private $invoiceId;

    /**
     * 決済アプリ起動URL<br>
     * 半角英数字<br>
     * 384 文字以内<br>
     * 支払/受取アプリ起動URL<br>
     * <p>
     * <ul type="square">
     * <li>Edy（モバイルEdy）：  未使用
     * <li>Edy（モバイルEdy以外）：  ViewerのURL、アプリ起動URL
     * <li>Suica（メール決済）：  未使用
     * <li>Suica（アプリ決済）：  決済画面URL、アプリ起動URL
     * <li>WAON：  決済画面URL、アプリ起動URL
     * <li>BitCash：  未使用
     * </ul>
     */
    private $appUrl;

    /**
     * API実行ID<br>
     * 半角数字<br>
     * 20 文字以内<br>
     * 決済センターが処理を識別するためのID<br>
     * <p>
     * BitCash決済のみで使用<br>
     */
    private $logId;

    /**
     * カード残高<br>
     * 半角数字<br>
     * 7 文字以内<br>
     * 決済正常終了時点の残りクレジット数<br>
     * <p>
     * BitCash決済のみで使用<br>
     * 0 以上 ～ 200,000 以下<br>
     */
    private $cardBalance;

    /**
     * センター要求日時<br>
     * 半角数字<br>
     * 14 文字以内<br>
     * 決済サーバーが要求電文を送信した日時<br>
     * YYYYMMDDhhmmss の形式<br>
     * 例）20181017235959<br>
     * <p>
     * BitCash決済のみで使用<br>
     */
    private $centerRequestDatetime;

    /**
     * センター応答日時<br>
     * 半角数字<br>
     * 14 文字以内<br>
     * 決済サーバーが応答電文を受信した日時<br>
     * YYYYMMDDhhmmss の形式<br>
     * 例）20181017235959<br>
     * <p>
     * BitCash決済のみで使用<br>
     */
    private $centerResponseDatetime;

    /**
     * MDKバージョン<br>
     * 半角英数字<br>
     * 5桁<br>
     * 電文のバージョン番号。<br>
     */
    private $txnVersion;

    /**
     * 結果XML(マスク済み)<br>
     * 半角英数字<br>
     */
    private $resultXml;

    /**
     * PayNowIDオブジェクト<br>
     * オブジェクト<br>
     * PayNowID用項目を格納するオブジェクト<br>
     */
    private $payNowIdResponse;

    /**
     * 決済サービスタイプを取得する<br>
     * @return string 決済サービスタイプ<br>
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * 決済サービスタイプを設定する<br>
     * @param string $serviceType 決済サービスタイプ<br>
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;
    }

    /**
     * 処理結果コードを取得する<br>
     * @return string 処理結果コード<br>
     */
    public function getMstatus()
    {
        return $this->mstatus;
    }

    /**
     * 処理結果コードを設定する<br>
     * @param string $mstatus 処理結果コード<br>
     */
    public function setMstatus($mstatus)
    {
        $this->mstatus = $mstatus;
    }

    /**
     * 詳細結果コードを取得する<br>
     * @return string 詳細結果コード<br>
     */
    public function getVResultCode()
    {
        return $this->vResultCode;
    }

    /**
     * 詳細結果コードを設定する<br>
     * @param string $vResultCode 詳細結果コード<br>
     */
    public function setVResultCode($vResultCode)
    {
        $this->vResultCode = $vResultCode;
    }

    /**
     * エラーメッセージを取得する<br>
     * @return string エラーメッセージ<br>
     */
    public function getMerrMsg()
    {
        return $this->merrMsg;
    }

    /**
     * エラーメッセージを設定する<br>
     * @param string $merrMsg エラーメッセージ<br>
     */
    public function setMerrMsg($merrMsg)
    {
        $this->merrMsg = $merrMsg;
    }

    /**
     * 電文IDを取得する<br>
     * @return string 電文ID<br>
     */
    public function getMarchTxn()
    {
        return $this->marchTxn;
    }

    /**
     * 電文IDを設定する<br>
     * @param string $marchTxn 電文ID<br>
     */
    public function setMarchTxn($marchTxn)
    {
        $this->marchTxn = $marchTxn;
    }

    /**
     * 取引IDを取得する<br>
     * @return string 取引ID<br>
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 取引IDを設定する<br>
     * @param string $orderId 取引ID<br>
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * 取引毎に付くIDを取得する<br>
     * @return string 取引毎に付くID<br>
     */
    public function getCustTxn()
    {
        return $this->custTxn;
    }

    /**
     * 取引毎に付くIDを設定する<br>
     * @param string $custTxn 取引毎に付くID<br>
     */
    public function setCustTxn($custTxn)
    {
        $this->custTxn = $custTxn;
    }

    /**
     * 受付番号を取得する<br>
     * @return string 受付番号<br>
     */
    public function getReceiptNo()
    {
        return $this->receiptNo;
    }

    /**
     * 受付番号を設定する<br>
     * @param string $receiptNo 受付番号<br>
     */
    public function setReceiptNo($receiptNo)
    {
        $this->receiptNo = $receiptNo;
    }

    /**
     * 請求番号を取得する<br>
     * @return string 請求番号<br>
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * 請求番号を設定する<br>
     * @param string $invoiceId 請求番号<br>
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;
    }

    /**
     * 決済アプリ起動URLを取得する<br>
     * @return string 決済アプリ起動URL<br>
     */
    public function getAppUrl()
    {
        return $this->appUrl;
    }

    /**
     * 決済アプリ起動URLを設定する<br>
     * @param string $appUrl 決済アプリ起動URL<br>
     */
    public function setAppUrl($appUrl)
    {
        $this->appUrl = $appUrl;
    }

    /**
     * API実行IDを取得する<br>
     * @return string API実行ID<br>
     */
    public function getLogId()
    {
        return $this->logId;
    }

    /**
     * API実行IDを設定する<br>
     * @param string $logId API実行ID<br>
     */
    public function setLogId($logId)
    {
        $this->logId = $logId;
    }

    /**
     * カード残高を取得する<br>
     * @return string カード残高<br>
     */
    public function getCardBalance()
    {
        return $this->cardBalance;
    }

    /**
     * カード残高を設定する<br>
     * @param string $cardBalance カード残高<br>
     */
    public function setCardBalance($cardBalance)
    {
        $this->cardBalance = $cardBalance;
    }

    /**
     * センター要求日時を取得する<br>
     * @return string センター要求日時<br>
     */
    public function getCenterRequestDatetime()
    {
        return $this->centerRequestDatetime;
    }

    /**
     * センター要求日時を設定する<br>
     * @param string $centerRequestDatetime センター要求日時<br>
     */
    public function setCenterRequestDatetime($centerRequestDatetime)
    {
        $this->centerRequestDatetime = $centerRequestDatetime;
    }

    /**
     * センター応答日時を取得する<br>
     * @return string センター応答日時<br>
     */
    public function getCenterResponseDatetime()
    {
        return $this->centerResponseDatetime;
    }

    /**
     * センター応答日時を設定する<br>
     * @param string $centerResponseDatetime センター応答日時<br>
     */
    public function setCenterResponseDatetime($centerResponseDatetime)
    {
        $this->centerResponseDatetime = $centerResponseDatetime;
    }

    /**
     * MDKバージョンを取得する<br>
     * @return string MDKバージョン<br>
     */
    public function getTxnVersion()
    {
        return $this->txnVersion;
    }

    /**
     * MDKバージョンを設定する<br>
     * @param string $txnVersion MDKバージョン<br>
     */
    public function setTxnVersion($txnVersion)
    {
        $this->txnVersion = $txnVersion;
    }

    /**
     * 結果XML(マスク済み)を設定する<br>
     * @param string $resultXml 結果XML(マスク済み)<br>
     */
    public function _setResultXml($resultXml)
    {
        $this->resultXml = $resultXml;
    }

    /**
     * 結果XML(マスク済み)を取得する<br>
     * @return string 結果XML(マスク済み)<br>
     */
    public function __toString()
    {
        return (string)$this->resultXml;
    }

    /**
     * PayNowIDオブジェクトを設定する<br>
     * @param PayNowIdResponse $payNowIdResponse PayNowIDオブジェクト<br>
     */
    public function setPayNowIdResponse($payNowIdResponse)
    {
        $this->payNowIdResponse = $payNowIdResponse;
    }

    /**
     * PayNowIDオブジェクトを取得する<br>
     * @return PayNowIdResponse PayNowIDオブジェクト<br>
     */
    public function getPayNowIdResponse()
    {
        return $this->payNowIdResponse;
    }

}
