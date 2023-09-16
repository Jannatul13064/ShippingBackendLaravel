<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FFSM</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font-Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <!-- Main Css -->
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}" />
  </head>

  <body>
    <!-- Header -->
    <header class="py-2 shadow sticky top-0 z-50 bg-light">
      <div class="container">
        <div class="flex justify-between items-center">
          <a href="/admin/home">
            <img src="{{asset('asset/images/logo.png')}}" alt="" class="w-48" />
          </a>

            <nav>
                <ul class="menu">
                <li>
                    <a href="/admin/home" class="active">
                    <i class="fa-solid fa-house"></i>
                    <p class="font-medium">Home</p>
                    </a>
                </li>

                <li>
                    <a href="pages/seaExport/seaExport.html">
                    <i class="fa-solid fa-ship"></i>
                    <p class="font-medium">Sea Export</p>
                    </a>
                </li>

                <li>
                    <a href="pages/seaImport/seaImport.html">
                    <i class="fa-solid fa-ship"></i>
                    <p class="font-medium">Sea Import</p>
                    </a>
                </li>

                <li>
                    <a href="pages/airExport/airExport.html">
                    <i class="fa-solid fa-plane-departure"></i>
                    <p class="font-medium">Air Export</p>
                    </a>
                </li>

                <li>
                    <a href="pages/airImport/airImport.html">
                    <i class="fa-solid fa-plane-arrival"></i>
                    <p class="font-medium">Air Import</p>
                    </a>
                </li>

                <li>
                    <a href="pages/maintenance/maintenance.html">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                    <p class="font-medium">Maintenance</p>
                    </a>
                </li>

                @guest
                    @if (Route::has('login'))
                        <li>
                            <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="">
                            <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else

                    {{-- li class should be navDropdown class --}}
                    <li class="">
                        <a id="navbarDropdown" class="" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="" aria-labelledby="">
                            <a class="" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>


            </nav>
        </div>
    </div>
</header>

    <section class="pt-5">
      <div class="container">
        <div class="flex gap-5">
          <aside class="sidebar">
            <nav class="sidebar_items">
              <ul class="flex flex-col gap-2 text-[15px]">
                <li>
                  <div class="active_sidebar">
                    <a href="/admin/home">
                      <i class="fa-solid fa-house"></i>
                      <p class="font-medium">Home</p>
                    </a>
                  </div>
                </li>

                <li>
                  <div>
                    <a href="pages/seaExport/seaExport.html">
                      <i class="fa-solid fa-ship"></i>
                      <p class="font-medium">Sea Export</p>
                    </a>

                    <button class="dropdown_btn">
                      <i class="fa-solid fa-angle-down"></i>
                    </button>
                  </div>

                  <nav class="dropdown">
                    <ol class="dropdown_items">
                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">Booking</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="/admin/booking-form">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">Add Booking</p>
                              </a>
                            </li>

                            <li>
                              <a href="/admin/all-bookings">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Booking List</p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">Shipping Order</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="Shipping Order/addShippingOrder.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">Add Shipping Order</p>
                              </a>
                            </li>

                            <li>
                              <a href="Shipping Order/shippingOrderList.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Shipping Order List</p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">Cargo Receive</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="Cargo Receive/addCargoReceive.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">Add Cargo Receive</p>
                              </a>
                            </li>

                            <li>
                              <a href="Cargo Receive/cargoReceiveList.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Cargo Receive List</p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">Cargo Stuffing</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="Cargo Stuffing/addStuffing.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">Add Stuffing</p>
                              </a>
                            </li>

                            <li>
                              <a href="Cargo Stuffing/stuffingList.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Stuffing List</p>
                              </a>
                            </li>

                            <li>
                              <a href="Cargo Stuffing/addStuffingPackage.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">Add Stuffing Package</p>
                              </a>
                            </li>

                            <li>
                              <a href="Cargo Stuffing/stuffingPackageList.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Stuffing Package List</p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">Shipment Advice</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="Shipment Advice/">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">Add Shipment Advice</p>
                              </a>
                            </li>

                            <li>
                              <a href="Shipment Advice/">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Shipment Advice List</p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">HBL</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="HBL/addHBL.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">Add HBL</p>
                              </a>
                            </li>

                            <li>
                              <a href="HBL/HBLList.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">HBL List</p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">MBL</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="MBL/add1stLegMBL.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">Add 1st Leg MBL</p>
                              </a>
                            </li>

                            <li>
                              <a href="MBL/1stLegMBLList.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">1st Leg MBL List</p>
                              </a>
                            </li>

                            <li>
                              <a href="MBL/add2ndLegMBL.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">Add 2nd Leg MBL</p>
                              </a>
                            </li>

                            <li>
                              <a href="MBL/2ndLegMBLList.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">2nd Leg MBL List</p>
                              </a>
                            </li>

                            <li>
                              <a href="MBL/add3rdLegMBL.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">Add 3rd Leg MBL</p>
                              </a>
                            </li>

                            <li>
                              <a href="MBL/3rdLegMBLList.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">3rd Leg MBL List</p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">Freight Invoice</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="Freight Invoice/addFreightInvoice.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">Add Freight Invoice</p>
                              </a>
                            </li>

                            <li>
                              <a href="Freight Invoice/freightInvoice.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Freight Invoice</p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">Debit Note</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="Debit Note/addDebitNote.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">Add Debit Note</p>
                              </a>
                            </li>

                            <li>
                              <a href="Debit Note/debitNote.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Debit Note</p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">Credit Note</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="Credit Note/addCreditNote.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">Add Credit Note</p>
                              </a>
                            </li>

                            <li>
                              <a href="Credit Note/creditNote.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Credit Note</p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">Expense Bill</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="Expense Bill/addExpenseBill.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">Add Expense Bill</p>
                              </a>
                            </li>

                            <li>
                              <a href="Expense Bill/expenseBill.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Expense Bill</p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">Report</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="Report/profitLossStatement.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">
                                  Profit & Loss Statement
                                </p>
                              </a>
                            </li>

                            <li>
                              <a href="Report/volumeReport.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Volume Report</p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>
                    </ol>
                  </nav>
                </li>

                <li>
                  <div>
                    <a href="pages/seaImport/seaImport.html">
                      <i class="fa-solid fa-ship"></i>
                      <p class="font-medium">Sea Import</p>
                    </a>

                    <button class="dropdown_btn">
                      <i class="fa-solid fa-angle-down"></i>
                    </button>
                  </div>

                  <nav class="dropdown">
                    <ol class="dropdown_items">
                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">House Bill</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="./addHouseBill.html">
                                <i
                                  class="fa-solid fa-house-chimney-medical"
                                ></i>
                                <p class="font-medium">Add House Bill</p>
                              </a>
                            </li>

                            <li>
                              <a href="./houseBillList.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">House Bill List</p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">Master Bill</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="./addMasterBill.html">
                                <i class="fa-solid fa-landmark"></i>
                                <p class="font-medium">Add Master Bill</p>
                              </a>
                            </li>

                            <li>
                              <a href="./masterBillList.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Master Bill List</p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">Arrival Notice</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="./addArrivalNotice.html">
                                <i class="fa-solid fa-comment-medical"></i>
                                <p class="font-medium">Add Arrival Notice</p>
                              </a>
                            </li>

                            <li>
                              <a href="./arrivalNoticeList.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Arrival Notice List</p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">Forward Letter</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="./addForwardLetter.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">Add Forward Letter</p>
                              </a>
                            </li>

                            <li>
                              <a href="./forwardLetterList.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Forward Letter List</p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">Delivery Order</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="./addDeliveryOrder.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">Add Delivery Order</p>
                              </a>
                            </li>

                            <li>
                              <a href="./deliveryOrderList.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Delivery Order List</p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">Freight Invoice</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="./addFreightInvoice.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">Add Freight Invoice</p>
                              </a>
                            </li>

                            <li>
                              <a href="./freightInvoice.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Freight Invoice</p>
                              </a>
                            </li>

                            <li>
                              <a href="./freightInvoiceRegister.html">
                                <i
                                  class="fa-regular fa-folder-open text-xl"
                                ></i>
                                <p class="font-medium">
                                  Freight Invoice Register
                                </p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">Expense Bill</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="./addExpenseBill.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">Add Expense Bill</p>
                              </a>
                            </li>

                            <li>
                              <a href="./expenseBill.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Expense Bill List</p>
                              </a>
                            </li>

                            <li>
                              <a href="./expenseBillRegister.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Expense Bill Register</p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">Custom Expense Bill</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="./addCustomExpense.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">
                                  Add Custom Expense Bill
                                </p>
                              </a>
                            </li>

                            <li>
                              <a href="./customExpenseBill.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">
                                  Custom Expense Bill List
                                </p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">Debit Note</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="./addDebitNote.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">Add Debit Note</p>
                              </a>
                            </li>

                            <li>
                              <a href="./debitNote.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Debit Note List</p>
                              </a>
                            </li>

                            <li>
                              <a href="./debitNoteRegister.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">Debit Note Register</p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">Credit Note</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="./addCreditNote.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">Add Credit Note</p>
                              </a>
                            </li>

                            <li>
                              <a href="./creditNote.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Credit Note List</p>
                              </a>
                            </li>

                            <li>
                              <a href="./creditNoteRegister.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Credit Note Register</p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">C&F Bill</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="./addCFBill.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">Add C&F Bill</p>
                              </a>
                            </li>

                            <li>
                              <a href="./cfBill.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">C&F Bill List</p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">C&F Bill Credit Note</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="./addCFBillCreditNote.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">
                                  Add C&F Bill Credit Note
                                </p>
                              </a>
                            </li>

                            <li>
                              <a href="./cfBillCredit.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">
                                  C&F Bill Credit Note List
                                </p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">C&F Bill Debit Note</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="./addCFBillDebitNote.html">
                                <i class="fa-solid fa-folder-plus"></i>
                                <p class="font-medium">
                                  Add C&F Bill Debit Note
                                </p>
                              </a>
                            </li>

                            <li>
                              <a href="./cfBillDebit.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">
                                  C&F Bill Debit Note List
                                </p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>

                      <li>
                        <button class="dropdown_item sub_dropdown_btn">
                          <a>
                            <i class="fa-solid fa-folder-plus"></i>
                            <p class="font-medium">Report</p>
                          </a>

                          <i class="fa-solid fa-angle-down"></i>
                        </button>

                        <nav class="sub_dropdown">
                          <ol class="sub_dropdown_items">
                            <li>
                              <a href="./profitLossStatement.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">
                                  Profit & Loss Statement
                                </p>
                              </a>
                            </li>

                            <li>
                              <a href="./customProfitLossStatement.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Custom Profit & Loss</p>
                              </a>
                            </li>

                            <li>
                              <a href="./volumeReport.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">Volume Report</p>
                              </a>
                            </li>

                            <li>
                              <a href="./cfVolumeReport.html">
                                <i class="fa-solid fa-table-list"></i>
                                <p class="font-medium">C&F Volume Report</p>
                              </a>
                            </li>
                          </ol>
                        </nav>
                      </li>
                    </ol>
                  </nav>
                </li>

                <li>
                  <div>
                    <a href="pages/airExport/airExport.html">
                      <i class="fa-solid fa-plane-departure"></i>
                      <p class="font-medium">Air Export</p>
                    </a>

                    <button class="dropdown_btn">
                      <i class="fa-solid fa-angle-down"></i>
                    </button>
                  </div>

                  <nav class="dropdown"></nav>
                </li>

                <li>
                  <div>
                    <a href="pages/airImport/airImport.html">
                      <i class="fa-solid fa-plane-arrival"></i>
                      <p class="font-medium">Air Import</p>
                    </a>

                    <button class="dropdown_btn">
                      <i class="fa-solid fa-angle-down"></i>
                    </button>
                  </div>

                  <nav class="dropdown"></nav>
                </li>

                <li>
                  <div>
                    <a href="pages/maintenance/maintenance.html">
                      <i class="fa-solid fa-screwdriver-wrench"></i>
                      <p class="font-medium">Maintenance</p>
                    </a>

                    <button class="dropdown_btn">
                      <i class="fa-solid fa-angle-down"></i>
                    </button>
                  </div>

                  <nav class="dropdown">
                    <ol class="dropdown_items">
                      <li>
                        <a href="./shipper.html">
                          <i class="fa-solid fa-truck-fast"></i>
                          <p class="font-medium">Shipper</p>
                        </a>
                      </li>

                      <li>
                        <a href="./consignee.html">
                          <i class="fa-solid fa-paper-plane"></i>
                          <p class="font-medium">consignee</p>
                        </a>
                      </li>

                      <li>
                        <a href="./agent.html">
                          <i class="fa-solid fa-users"></i>
                          <p class="font-medium">Agent</p>
                        </a>
                      </li>

                      <li>
                        <a href="./c&fAgent.html">
                          <i class="fa-solid fa-users"></i>
                          <p class="font-medium">C&F Agent</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-solid fa-users"></i>
                          <p class="font-medium">GH Agent</p>
                        </a>
                      </li>

                      <li>
                        <a href="pages/maintenance.html">
                          <i class="fa-solid fa-toolbox"></i>
                          <p class="font-medium">Carrier</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">Carrier</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">Container</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">For VSL</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">MTR VSL</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">Mode</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">3rd Party</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">Port</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">Key Account</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">Key Account</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">Key Account</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">Key Account</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">Key Account</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">Key Account</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">Key Account</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">Key Account</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">Key Account</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">Key Account</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">Key Account</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">Key Account</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">Key Account</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">Key Account</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">Key Account</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">Key Account</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">Key Account</p>
                        </a>
                      </li>

                      <li>
                        <a href="">
                          <i class="fa-regular fa-folder-open text-xl"></i>
                          <p class="font-medium">Key Account</p>
                        </a>
                      </li>
                    </ol>
                  </nav>
                </li>

                <li>
                  <div>
                    <a href="">
                      <i class="fa-solid fa-bell"></i>
                      <p class="font-medium">Notification</p>
                    </a>
                  </div>
                </li>


              </ul>
            </nav>
          </aside>

          <main class="main_content">
            @yield('main-section')


             <!-- Footer -->
             <footer class="py-2 border-t mt-14">
                <p class="text-sm">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  <span class="text-primary font-medium">Pidex Infocy!</span>
                </p>
              </footer>
          </main>


        </div>

    </div>


</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
<script src="{{asset('asset/javascript/script.js')}}"></script>
</body>
</html>
