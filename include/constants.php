<?php
// Роли
const ROLE_ADMIN = 1;
const ROLE_MANAGER = 4;
const ROLE_MANAGER_SENIOR = 11;
const ROLE_ACCOUNTANT = 12;

const ROLES = array(ROLE_ADMIN, ROLE_MANAGER, ROLE_MANAGER_SENIOR, ROLE_ACCOUNTANT);
const ROLE_NAMES = array(ROLE_ADMIN => "admin", ROLE_MANAGER => "manager", ROLE_MANAGER_SENIOR => "manager-senior", ROLE_ACCOUNTANT => "accountant");
const ROLE_LOCAL_NAMES = array(ROLE_ADMIN => "Администратор", ROLE_MANAGER => "Менеджер", ROLE_MANAGER_SENIOR => "Старший менеджер", ROLE_ACCOUNTANT => "Бухгалтер");

// Результаты звонка
const RESULT_NO_INTEREST = 1;
const RESULT_OUTCOME = 2;
const RESULT_SEND_OFFER_PRICE = 3;
const RESULT_SEND_OFFER_CALCULATION = 4;
const RESULT_OTHER = 5;
const RESULT_ORDER = 6;

const RESULTS = array(RESULT_NO_INTEREST, RESULT_OUTCOME, RESULT_SEND_OFFER_PRICE, RESULT_SEND_OFFER_CALCULATION, RESULT_OTHER, RESULT_ORDER);
const RESULT_NAMES = array(RESULT_NO_INTEREST => "Не заинтересовались", RESULT_OUTCOME => "Исходящие звонки", RESULT_SEND_OFFER_PRICE => "Пришлите предложение, прайс", RESULT_SEND_OFFER_CALCULATION => "Пришлите предложение с просчитанным тирадом", RESULT_OTHER => "Другое", RESULT_ORDER => "Заказ");
const RESULT_EFFECTIVE = array(RESULT_NO_INTEREST => 0, RESULT_OUTCOME => 0, RESULT_SEND_OFFER_PRICE => 1, RESULT_SEND_OFFER_CALCULATION => 1, RESULT_OTHER => 1, RESULT_ORDER => 1);

// Валюты
const CURRENCY_RUB = "rub";
const CURRENCY_USD = "usd";
const CURRENCY_EURO = "euro";

const CURRENCIES = array(CURRENCY_RUB, CURRENCY_USD, CURRENCY_EURO);
const CURRENCY_SHORTNAMES = array(CURRENCY_RUB => "руб.", CURRENCY_USD => "USD", CURRENCY_EURO => "евро");

// Печатные машины
const PRINTER_ZBS_1 = 1;
const PRINTER_ZBS_2 = 2;
const PRINTER_ZBS_3 = 3;
const PRINTER_COMIFLEX = 4;
const PRINTER_ATLAS = 5;

const PRINTERS = array(PRINTER_COMIFLEX, PRINTER_ZBS_1, PRINTER_ZBS_2, PRINTER_ZBS_3, PRINTER_ATLAS);
const PRINTER_NAMES = array(PRINTER_COMIFLEX => 'Comiflex', PRINTER_ZBS_1 => 'ZBS-1', PRINTER_ZBS_2 => 'ZBS-2', PRINTER_ZBS_3 => 'ZBS-3', PRINTER_ATLAS => 'Atlas');
const PRINTER_SHORTNAMES = array(PRINTER_COMIFLEX => 'comiflex', PRINTER_ZBS_1 => 'zbs1', PRINTER_ZBS_2 => 'zbs2', PRINTER_ZBS_3 => 'zbs3', PRINTER_ATLAS => 'atlas');
const PRINTER_COLORFULLNESSES = array(PRINTER_COMIFLEX => 8, PRINTER_ZBS_1 => 6, PRINTER_ZBS_2 => 6, PRINTER_ZBS_3 => 8, PRINTER_ATLAS => 6);

// Ламинаторы
const LAMINATOR_SOLVENT = 1;
const LAMINATOR_SOLVENTLESS = 2;

const LAMINATORS = array(LAMINATOR_SOLVENT, LAMINATOR_SOLVENTLESS);
const LAMINATOR_NAMES = array(LAMINATOR_SOLVENT => 'Ламинатор сольвент', LAMINATOR_SOLVENTLESS => 'Ламинатор бессольвент');

// Резки
const CUTTER_1 = 1;
const CUTTER_2 = 2;
const CUTTER_3 = 3;
const CUTTER_4 = 4;
const CUTTER_ATLAS = 101;
const CUTTER_SOMA = 102;

const CUTTERS = array(CUTTER_1, CUTTER_2, CUTTER_3, CUTTER_4, CUTTER_SOMA, CUTTER_ATLAS);
const CUTTER_NAMES = array(CUTTER_1 => "Резка 1", CUTTER_2 => "Резка 2", CUTTER_3 => "Резка 3", CUTTER_4 => "Резка 4", CUTTER_ATLAS => "Резка &laquo;Атлас&raquo;", CUTTER_SOMA => "Резка &laquo;Сома&raquo;");
const CUTTER_SPEEDS = array(CUTTER_1 => 35, CUTTER_2 => 35, CUTTER_3 => 35, CUTTER_4 => 80, CUTTER_ATLAS => 35, CUTTER_SOMA => 120);

// Типы работы
const WORK_TYPE_NOPRINT = 1;
const WORK_TYPE_PRINT = 2;
const WORK_TYPE_SELF_ADHESIVE = 3;

const WORK_TYPES = array(WORK_TYPE_NOPRINT, WORK_TYPE_PRINT, WORK_TYPE_SELF_ADHESIVE);
const WORK_TYPE_NAMES = array(WORK_TYPE_NOPRINT => "Пленка без печати", WORK_TYPE_PRINT => "Пленка с печатью", WORK_TYPE_SELF_ADHESIVE => "Самоклеящиеся мат-лы");
const WORK_TYPE_PRINTERS = array(WORK_TYPE_PRINT => array(PRINTER_COMIFLEX, PRINTER_ZBS_1, PRINTER_ZBS_2, PRINTER_ZBS_3), WORK_TYPE_SELF_ADHESIVE => array(PRINTER_ATLAS));

// Статусы заказа
const ORDER_STATUS_DRAFT = 1; // Черновик
const ORDER_STATUS_CALCULATION = 2; // Сделан расчёт
const ORDER_STATUS_WAITING = 3; // Ждём подтверждения
const ORDER_STATUS_CONFIRMED = 4; // Ждём постановки в план
const ORDER_STATUS_REJECTED = 5; // Отклонено
const ORDER_STATUS_TECHMAP = 6; // Составлена технологическая карта
const ORDER_STATUS_TRASH = 7; // В корзине
const ORDER_STATUS_PLAN_PRINT = 8; // В плане печати
const ORDER_STATUS_PLAN_LAMINATE = 9; // В плане ламинации
const ORDER_STATUS_PLAN_CUT = 10; // В плане резки

const ORDER_STATUS_NOT_IN_WORK = 100; // Сделан расчёт или составлена тех. карта

const ORDER_STATUS_NAMES = array(ORDER_STATUS_DRAFT => "Черновик", ORDER_STATUS_CALCULATION => "Сделан расчёт", ORDER_STATUS_WAITING => "Ждём подтверждения", ORDER_STATUS_CONFIRMED => "Ждём постановки в план", ORDER_STATUS_REJECTED => "Отклонено", ORDER_STATUS_TECHMAP => "Составлена тех. карта", ORDER_STATUS_TRASH => "В корзине", ORDER_STATUS_PLAN_PRINT => "В плане печати", ORDER_STATUS_PLAN_LAMINATE => "В плане ламинации", ORDER_STATUS_PLAN_CUT => "В плане резки");
const ORDER_STATUS_COLORS = array(ORDER_STATUS_DRAFT => "gray", ORDER_STATUS_CALCULATION => "steelblue", ORDER_STATUS_WAITING => "goldenrod", ORDER_STATUS_CONFIRMED => "mediumseagreen", ORDER_STATUS_REJECTED => "crimson", ORDER_STATUS_TECHMAP => "saddlebrown", ORDER_STATUS_TRASH => "black", ORDER_STATUS_PLAN_PRINT => "#9933ff", ORDER_STATUS_PLAN_LAMINATE => "#4d009a", ORDER_STATUS_PLAN_CUT => "#27004e");
const ORDER_STATUS_ICONS = array(ORDER_STATUS_DRAFT => "fas fa-edit", ORDER_STATUS_CALCULATION => "fas fa-check", ORDER_STATUS_WAITING => "fas fa-clock", ORDER_STATUS_CONFIRMED => "fas fa-check-double", ORDER_STATUS_REJECTED => "fas fa-times-circle", ORDER_STATUS_TECHMAP => "fas fa-file", ORDER_STATUS_TRASH => "fas fa-trash-alt", ORDER_STATUS_PLAN_PRINT => "fas fa-print", ORDER_STATUS_PLAN_LAMINATE => "fas fa-layer-group", ORDER_STATUS_PLAN_CUT => "fas fa-cut");

// Разделы плана
const WORK_PRINTING = 1;
const WORK_LAMINATION = 2;
const WORK_CUTTING = 3;

const WORKS = array(WORK_PRINTING, WORK_LAMINATION, WORK_CUTTING);
const WORK_NAMES = array(WORK_PRINTING => "Печать", WORK_LAMINATION => "Ламинация", WORK_CUTTING => "Резка");
const WORK_CONTINUATIONS = array(WORK_PRINTING => "Допечатка", WORK_LAMINATION => "Доламинирование", WORK_CUTTING => "Дорезка");

// Роли плана
const PLAN_ROLE_PRINT = 1;
const PLAN_ROLE_ASSISTANT = 2;
const PLAN_ROLE_LAMINATE = 3;
const PLAN_ROLE_CUT = 4;

const PLAN_ROLES = array(PLAN_ROLE_PRINT, PLAN_ROLE_ASSISTANT, PLAN_ROLE_LAMINATE, PLAN_ROLE_CUT);
const PLAN_ROLE_NAMES = array(PLAN_ROLE_PRINT => "Печатник", PLAN_ROLE_ASSISTANT => "Помощник", PLAN_ROLE_LAMINATE => "Ламинаторщик", PLAN_ROLE_CUT => "Резчик");
const PLAN_ROLE_PLURALS = array(PLAN_ROLE_PRINT => "Печатники", PLAN_ROLE_ASSISTANT => "Помощники", PLAN_ROLE_LAMINATE => "Ламинаторщики", PLAN_ROLE_CUT => "Резчики");
const WORK_PLAN_ROLES = array(WORK_PRINTING => PLAN_ROLE_PRINT, WORK_LAMINATION => PLAN_ROLE_LAMINATE, WORK_CUTTING => PLAN_ROLE_CUT);

// Типы объектов плана
const PLAN_TYPE_EDITION = 1;
const PLAN_TYPE_EVENT = 2;
const PLAN_TYPE_CONTINUATION = 3;
const PLAN_TYPE_PART = 4;
const PLAN_TYPE_PART_CONTINUATION = 5;

// Типы наценки
const ET_NOPRINT = 1;
const ET_PRINT_NO_LAMINATION = 2;
const ET_PRINT_1_LAMINATION = 3;
const ET_PRINT_2_LAMINATIONS = 4;
const ET_SELF_ADHESIVE = 5;

const EXTRACHARGE_TYPES = array(ET_NOPRINT, ET_PRINT_NO_LAMINATION, ET_PRINT_1_LAMINATION, ET_PRINT_2_LAMINATIONS);
const EXTRACHARGE_TYPE_NAMES = array(ET_NOPRINT => "Пленка без печати", ET_PRINT_NO_LAMINATION => "Пленка с печатью без ламинации", ET_PRINT_1_LAMINATION => "Пленка с печатью и ламинацией", ET_PRINT_2_LAMINATIONS => "Пленка с печатью и двумя ламинациями", ET_SELF_ADHESIVE => "Самоклеящиеся материалы");

// Статусы роликов
const ROLL_STATUS_FREE = 1;
const ROLL_STATUS_UTILIZED = 2;
const ROLL_STATUS_CUT = 3;
const ROLL_STATUSES = array(ROLL_STATUS_FREE, ROLL_STATUS_UTILIZED, ROLL_STATUS_CUT);
const ROLL_STATUS_NAMES = array(ROLL_STATUS_FREE => "Свободный", ROLL_STATUS_UTILIZED => "Сработанный", ROLL_STATUS_CUT => "Раскроили");
const ROLL_STATUS_COLOURS = array(ROLL_STATUS_FREE => "forestgreen", ROLL_STATUS_UTILIZED => "red", ROLL_STATUS_CUT => "violet");

// Другое
const ISINVALID = ' is-invalid';
?>