window.Cliengo = {}; //all Cliengo configs, functions and params goes into this object

window.Cliengo.chatConfig = {
  "companyId" : "5ec0bc5c5b3d9800283ec076",
  "websiteId" : "5ec0bc5d5b3d9800283ec079",
  "whiteLabelId" : "55df4ed3e4b0337744bcd65a",
  "whiteLabelName" : "",
  "googleAdWordsConversionId" : "",
  "googleAnalyticsId" : "",
  "chatbotName" : "Dr. Angélica Miranda",

    "phone" : "",
  "title": "clinicamiranda.com",
  "businessHoursConfiguration" : null,
  "conversionPixels" : "",
  "customFeedbackImageUrl" : "",
  "widgetIcon" : "LIGHT_STROKE",
   "widgetStyle" : "ICON",
  "chatWindowColor" : "#03e6ff",
  "cliengoMeetings" : "false",
  "chatWindowTitle" : "Chat de ventas",
  "chatWindowInputPlaceholder" : "Escribe un mensaje...",
  "chatInitialMessage" : "Hola, estoy disponible, te puedo ayudar con algo?",
  "chatIsWritingMessage" : " está escribiendo...",
  "chatSaluteTimeInSeconds" : 5,
  "avatarImgUrl": "",
  "labs":{
      },
  "companyLabs": "socketeer,data_request",
  "planType": "CLIENGO_FREE",
  "vertical": "SOFTWARE",
    "formHooksEnabled" : false,
  "automaticRemarketingEnabled" : true,
  "chatEnabled" : true,
        "poweredBy":{
          "text": "Usamos Cliengo ",
          "link": "https://www.cliengo.com/?utm_source=usamos_cliengo&utm_medium=chat",
          "img":  "https://res.cloudinary.com/hbrrdozyj/image/upload/v1603736815/Usamos-Cliengo_knac91.png"
      },
    "customPoweredByUtms": "",
  "softDisable": false,
  "hasConvertedLead" : false,   "CDN_URL_DOMAIN" : "//d47r8x2gwo1do.cloudfront.net",
        "WS_CHATBOT_URL" : "wss://chatbot.cliengo.com",
      "sessionPath" : "/s/5ec0bc5c5b3d9800283ec076/5ec0bc5d5b3d9800283ec079",
  "cacheVersion" : "1438-07062065",
  "debug" : false,
  "whatsAppActive": true,
  "lang" : "es",
  "widgetVersion" : "2.0"
}


var host = 'https://lw.cliengo.com';

var mainClgoScriptId = 'mainclgo';
var mainWspScriptId = 'mainWsp';
var mainclgoScriptExists = document.querySelector('script[id="' + mainClgoScriptId + '"]');

loadMain();

function loadMain() {
  if(mainclgoScriptExists) {
    console.warn('Cuidado! ya existe un script con id "' + mainClgoScriptId + '", ' +
      'probablemente el script del chat este duplicado en ese sitio!');
  }

  var s = document.createElement('script');
  s.type = 'text/javascript';
  s.id = mainClgoScriptId;
  s.src = host + '/mainclgo.bundle.js';
  s.setAttribute('data-company-id', '5ec0bc5c5b3d9800283ec076');
  s.setAttribute('data-source-id', '5ec0bc5d5b3d9800283ec079');
  s.setAttribute('data-host', host);
  s.async = true;
  document.body.appendChild(s);
  console.debug('clgo loaded');

  loadWhatsAppWidget();
}

function onCommonsLoad() {
  console.log(commonsClgoScriptId + ' script loaded successfuly.');
  loadMain();
}

// WhatsApp functions
function setwhatsappConfig() {
      window.ldkWSP = {};
    ldkWSP.widget_color = "#00bfa5";
    ldkWSP.widget_message = "Chatea con nosotros";
    ldkWSP.conversionPixelHtml = "";
    ldkWSP.position = "";
    ldkWSP.phone = "+541111111111";
    ldkWSP.desktop_version = "EXTENDED";
    ldkWSP.lang = "es";
    ldkWSP.businessHoursConfiguration = null,
    ldkWSP.company_id = "5ec0bc5c5b3d9800283ec076";
    ldkWSP.website_id = "5ec0bc5d5b3d9800283ec079";
    ldkWSP.disable_powered_by = "" === "true";
    ldkWSP.custom_powered_by_utms = "";
    ldkWSP.googleAnalyticsId = "";
    ldkWSP.plan_type = "CLIENGO_FREE";
    ldkWSP.website_id = "5ec0bc5d5b3d9800283ec079";
    ldkWSP.show_desktop = true;
    ldkWSP.show_mobile = true;
    ldkWSP.labs = {
          };
    ldkWSP.notice = null;
    ldkWSP.name_request_message = null;
    ldkWSP.whats_app_request_message = null;
    ldkWSP.message_request_message = null;
  }

function loadWhatsAppWidget() {
      setwhatsappConfig();
    var wspHost = 'https://wb.cliengo.com';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.id = mainWspScriptId;
    s.src = wspHost + '/dist/js/mainWsp.js';
    s.setAttribute('data-company-id', '5ec0bc5c5b3d9800283ec076');
    s.setAttribute('data-source-id', '5ec0bc5d5b3d9800283ec079');
    s.setAttribute('data-host', wspHost);
    s.async = true;
    document.body.appendChild(s);
  }

