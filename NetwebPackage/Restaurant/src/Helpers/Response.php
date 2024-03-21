<?php

namespace Netweb\Restaurant\Helpers;

class Response
{
    // INFORMATION RESPONSES
    public static $HTTP_CONTINUE            = 100;
    public static $HTTP_SWITCHING_PROTOCOLS = 101;
    public static $HTTP_PROCESSING          = 102;
    public static $HTTP_EARLY_HINTS         = 102;

    // SUCCESSFULL RESPONSES
    public static $HTTP_OK                  = 200;
    public static $HTTP_CREATED             = 201;
    public static $HTTP_ACCEPTED            = 202;
    public static $HTTP_NON_AUTHORITATIVE_INFOMATION = 203;
    public static $HTTP_NO_CONTENT          = 204;
    public static $HTTP_RESET_CONTENT       = 205;
    public static $HTTP_PARTIAL_CONTENT     = 206;
    public static $HTTP_MULTIPLE_STATUS     = 207;
    public static $HTTP_ALREADY_REPORTED    = 208;

    // REDIRECTION RESPONSES
    public static $HTTP_MULTIPLE_RESPONSE   = 300;
    public static $HTTP_MOVED_PERMANENTLY   = 301;
    public static $HTTP_FOUND               = 302;
    public static $HTTP_SEE_OTHER           = 303;
    public static $HTTP_NOT_MODIFIED        = 304;
    public static $HTTP_USE_PROXY           = 305;
    public static $HTTP_UNUSED              = 306;
    public static $HTTP_TEMPORARY_REDIRECT  = 307;
    public static $HTTP_PERMANANT_REDIRECT  = 308;

    // CLIENT ERROR RESPONSE
    public static $HTTP_BAD_REQUEST         = 400;
    public static $HTTP_UNAUTHORISED        = 401;
    public static $HTTP_PAYMENT_REQUIRED    = 402;
    public static $HTTP_FORBIDDEN           = 403;
    public static $HTTP_NOT_FOUND           = 404;
    public static $HTTP_METHOD_NOT_ALLOWED  = 405;
    public static $HTTP_NOT_ACCEPATABLE     = 406;
    public static $HTTP_PROXY_AUTH_REQUIRED = 407;
    public static $HTTP_REQUEST_TIMEOUT     = 408;
    public static $HTTP_CONFLICT            = 409;
    public static $HTTP_GONE                = 410;
    public static $HTTP_LENGTH_REQUIRED     = 411;
    public static $HTTP_PRECONDITION_FAILED = 412;
    public static $HTTP_PAYLOAD_TOO_LARGE   = 413;
    public static $HTTP_URI_TOO_LONG        = 414;
    public static $HTTP_UNSUPPORTED_MEDIA_TYPE = 415;
    public static $HTTP_RANGE_NOT_SATISFIABLE  = 416;
    public static $HTTP_EXCEPTION_FAILD        = 417;
    public static $HTTP_MISDIRECTED_REQUEST    = 421;
    public static $HTTP_UNPROCESSABLE_CONTENT  = 422;
    public static $HTTP_LOCKED                 = 423;
    public static $HTTP_FAILED_DEPENDENCY      = 424;
    public static $HTTP_TOO_EARLY              = 425;
    public static $HTTP_UPGRADE_REQUIRED       = 426;
    public static $HTTP_PRECONDITION_REQUIRED  = 428;
    public static $HTTP_TOO_MANY_REQUEST       = 429;
    public static $HTTP_LARGE_HEADER_FIELDS    = 431;
    public static $HTTP_UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    // SERVER ERROR RESPONSE
    public static $HTTP_INTERNAL_SERVER_ERROR= 500;
    public static $HTTP_NOT_IMPLEMENTED      = 501;
    public static $HTTP_BAD_GATEWAY          = 502;
    public static $HTTP_SERVICE_UNAVAILABLE  = 503;
    public static $HTTP_GATEWAY_TIMEOUT      = 504;
    public static $HTTP_VERSION_ERROR        = 506;
    public static $HTTP_CONFIGURATION_ERROR  = 506;
    public static $HTTP_STORAGE_ERROR        = 507;
    public static $HTTP_LOOP_DETCTED         = 508;
    public static $HTTP_NOT_EXTENDED         = 510;
    public static $HTTP_NETWORK_AUTH_ERROR   = 511;
}
