
@extends('../layouts.admin1')

@section('main-section')

<div class="min-h-[73vh]">
    <div class="main_content_head">
      <nav class="flex text-[15px]" aria-label="Breadcrumb">
        <ol class="flex items-center space-x-1 font-medium">
          <li class="flex items-center">
            <a href="../seaExport.html" class="flex gap-2 items-center">
              <i class="fa-solid fa-ship"></i>
              Sea Export
            </a>
          </li>

          <li aria-current="page">
            <div class="flex items-center">
              <i class="fa-solid fa-chevron-right fa-2xs mt-1"></i>
              <span class="ml-1 md:ml-2"> Booking List </span>
            </div>
          </li>
        </ol>
      </nav>


      <div class="flex items-center gap-2 text-white">
        <i class="fa-solid fa-calendar-days"></i>
        <p>14-06-2023</p>
      </div>
    </div>

    @if(session('success'))
        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="border rounded my-4">
      <div
        class="border-b p-2 bg-gray-100 flex items-center justify-between"
      >
        <div class="flex items-center gap-2 font-medium">
          <i class="fa-solid fa-ship"></i>
          <span>Booking List</span>
        </div>



        <div class="flex gap-4">
          <div class="filter_input">
            <input
              type="text"
              name=""
              placeholder="Filter Reference No."
            />

            <span>
              <i class="fa-solid fa-magnifying-glass"></i>
            </span>
          </div>
          <a
            href="/admin/booking-form"
            class="px-4 py-1 rounded border border-gray-400 hover:bg-primary hover:text-light duration-300"
          >
            + Add Booking
          </a>
        </div>
      </div>

      <div class="p-4">
        <!-- Advance Search -->




        <form class="custom_form">
          <div class="grid grid-cols-5 gap-4">
            <select class="select" name="state">
                <option>--Select Booking No--</option>
            @foreach ($bookings as $booking)
              <option>{{$booking->booking_id}}</option>
            @endforeach
            </select>

            <select class="select" name="state">
              <option>--Select Consignee--</option>
            @foreach ($bookings as $booking)
              <option>{{$booking->consignee_name}}</option>
            @endforeach
            </select>

            <select class="select" name="state">
              <option>--Select Agent--</option>
            @foreach ($bookings as $booking)
              <option>{{$booking->agent_name}}</option>
            @endforeach
            </select>

            <select class="select" name="state">
              <option>--Select Shipper--</option>
            @foreach ($bookings as $booking)
              <option>{{$booking->shipper_name}}</option>
            @endforeach
            </select>

            <select class="select" name="state">
              <option>--Select Key Account--</option>
            @foreach ($bookings as $booking)
              <option>{{$booking->key_account}}</option>
            @endforeach
            </select>

            <div>
              <input
                type="text"
                class="datepicker"
                name="from"
                placeholder="From Date"
                onchange=""
              />
            </div>

            <div>
              <input
                type="text"
                class="datepicker"
                name="to"
                placeholder="To Date"
                onchange=""
              />
            </div>

            <div>
              <button
                class="bg-primary text-light px-5 py-1.5 rounded"
              >
                Search Result
              </button>
            </div>
          </div>
        </form>

        <!-- Table -->
        <div class="mt-6">

          <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left border">
              <thead class="text-[13px] bg-gray-50 border-b">
                <tr>
                  <th>
                    <div class="flex items-center">
                      Booking No
                      <button class="ml-1 text-[11px] opacity-80">
                        <i class="fa-solid fa-sort"></i>
                      </button>
                    </div>
                  </th>
                  <th>
                    <div class="flex items-center">
                      Date
                      <button class="ml-1 text-[11px] opacity-80">
                        <i class="fa-solid fa-sort"></i>
                      </button>
                    </div>
                  </th>

                  <th>
                    <div class="flex items-center">
                      Transport Mode
                      <button class="ml-1 text-[11px] opacity-80">
                        <i class="fa-solid fa-sort"></i>
                      </button>
                    </div>
                  </th>

                  <th>
                    <div class="flex items-center">
                      Key Account
                      <button class="ml-1 text-[11px] opacity-80">
                        <i class="fa-solid fa-sort"></i>
                      </button>
                    </div>
                  </th>

                  <th>
                    <div class="flex items-center">
                      Consignee
                      <button class="ml-1 text-[11px] opacity-80">
                        <i class="fa-solid fa-sort"></i>
                      </button>
                    </div>
                  </th>

                  <th>
                    <div class="flex items-center">
                      Shipper
                      <button class="ml-1 text-[11px] opacity-80">
                        <i class="fa-solid fa-sort"></i>
                      </button>
                    </div>
                  </th>

                  <th>
                    <div class="flex items-center">
                      POL
                      <button class="ml-1 text-[11px] opacity-80">
                        <i class="fa-solid fa-sort"></i>
                      </button>
                    </div>
                  </th>

                  <th>
                    <div class="flex items-center">
                      POD
                      <button class="ml-1 text-[11px] opacity-80">
                        <i class="fa-solid fa-sort"></i>
                      </button>
                    </div>
                  </th>

                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                @foreach($bookings as $booking)
                <tr class="bg-white border-b">
                  <td>{{$booking->booking_id}}</td>
                  <td>{{$booking->created_at}}</td>
                  <td>{{$booking->mode}}</td>
                  <td>{{$booking->key_account}}</td>
                  <td>{{$booking->consignee_name}}</td>
                  <td>{{$booking->shipper_name}}</td>
                  <td>{{$booking->POL}}</td>
                  <td>{{$booking->POD}}</td>
                  <td>
                    <div
                      class="flex gap-3 items-center justify-center"
                    >
                      <a
                      href="{{route('admin.booked-edited', ['id' => $booking->id]) }}"
                        class="hover:text-blue-600 duration-300"
                      >
                        <i class="fa-solid fa-pen-to-square"></i>
                      </a>

                      <div>
                        <button
                          data-modal-target="viewBookingModal"
                          data-modal-toggle="viewBookingModal"
                          class="hover:text-red-600 duration-300"
                        >
                          <i class="fa-solid fa-eye"></i>
                        </button>

                        <!-- Main modal -->
                        <div
                          id="viewBookingModal"
                          tabindex="-1"
                          aria-hidden="true"
                          class="fixed top-[8%] left-0 right-0 z-50 hidden w-full p-4 overflow-y-auto h-[90vh] max-h-full"
                        >
                          <div
                            class="relative w-full max-w-6xl max-h-full"
                          >
                            <div
                              class="relative bg-white rounded-lg shadow"
                            >
                              <!-- Modal header -->
                              <div
                                class="flex items-center justify-between p-3 border-b rounded-t bg-gray-100"
                              >
                                <div>
                                  <h3 class="font-medium text-base">
                                    <i
                                      class="fa-solid fa-desktop opacity-70"
                                    ></i>
                                    View Booking
                                  </h3>
                                </div>

                                <div class="flex items-center gap-3">
                                  <button
                                    class="border border-gray-400 rounded-lg px-4 py-1.5 hover:bg-gray-700 hover:text-light duration-300"
                                  >
                                    <i class="fa-solid fa-print"></i>
                                    Print
                                  </button>

                                  <button
                                    class="border border-gray-400 rounded-lg px-4 py-1.5 hover:bg-gray-700 hover:text-light duration-300"
                                  >
                                    <i
                                      class="fa-solid fa-download"
                                    ></i>
                                    PDF
                                  </button>

                                  <button
                                    class="border border-gray-400 rounded-lg px-4 py-1.5 hover:bg-gray-700 hover:text-light duration-300"
                                  >
                                    <i
                                      class="fa-solid fa-download"
                                    ></i>
                                    WORD
                                  </button>

                                  <button
                                    class="border border-gray-400 rounded-lg px-4 py-1.5 hover:bg-gray-700 hover:text-light duration-300"
                                  >
                                    <i
                                      class="fa-solid fa-download"
                                    ></i>
                                    Excel
                                  </button>

                                  <button
                                    class="border border-gray-400 px-3 py-1.5 hover:bg-gray-700 hover:text-light duration-300 rounded-lg"
                                    data-modal-hide="viewBookingModal"
                                  >
                                    X
                                  </button>
                                </div>
                              </div>

                              <!-- Modal body -->



                              @if ($booking)
                              <div class="p-4 text-[15px]">

                                <div class="grid grid-cols-2 gap-20">
                                  <!-- Left -->
                                  <div>
                                    <div
                                      class="flex gap-4 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Date :
                                      </p>
                                      <p class="w-2/3">{{$booking->created_at}}</p>
                                    </div>

                                    <div
                                      class="flex gap-4 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Transport Mode :
                                      </p>
                                      <p class="w-2/3">{{$booking->mode}}</p>
                                    </div>

                                    <div
                                      class="flex gap-4 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Freight Term
                                      </p>
                                      <p class="w-2/3">
                                        {{$booking->freight_term}}
                                      </p>
                                    </div>

                                    <div
                                      class="flex gap-4 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Sales Type :
                                      </p>
                                      <p class="w-2/3"> {{$booking->sales_type}}</p>
                                    </div>

                                    <div
                                      class="flex gap-4 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Key Account :
                                      </p>
                                      <p class="w-2/3">{{$booking->key_account}}</p>
                                    </div>

                                    <div
                                      class="flex gap-2 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Shipper Name :
                                      </p>
                                      <p class="w-2/3">
                                        {{$booking->shipper_name}}
                                      </p>
                                    </div>

                                    <div
                                      class="flex gap-2 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Shipper Bank :
                                      </p>
                                      <p class="w-2/3">
                                        {{$booking->shipper_bank}}
                                      </p>
                                    </div>

                                    <div
                                      class="flex gap-4 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Agreement Type :
                                      </p>

                                      <div class="w-2/3">
                                        {{$booking->agreement_type}}
                                      </div>
                                    </div>

                                    <div
                                      class="flex gap-2 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Agent :
                                      </p>
                                      <p class="w-2/3">{{$booking->agent_name}}</p>
                                    </div>

                                    <div
                                      class="flex gap-2 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Agent Address :
                                      </p>
                                      <p class="w-2/3">{{$booking->agent_address}}</p>
                                    </div>
                                    <div
                                      class="flex gap-2 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Agent Emergency Address :
                                      </p>
                                      <p class="w-2/3">{{$booking->agent_emergency_address}}</p>
                                    </div>
                                    <div
                                      class="flex gap-2 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Agent Contact No :
                                      </p>
                                      <p class="w-2/3">{{$booking->agent_contact_no}}</p>
                                    </div>
                                    <div
                                      class="flex gap-2 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Agent Bank Acc :
                                      </p>
                                      <p class="w-2/3">{{$booking->agent_bank_acc}}</p>
                                    </div>

                                    <div
                                      class="flex gap-2 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Consignee :
                                      </p>
                                      <p class="w-2/3">{{$booking->consignee_name}}</p>
                                    </div>

                                    <div
                                      class="flex gap-2 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Consignee Bank :
                                      </p>
                                      <p class="w-2/3">
                                        {{$booking->consignee_bank_acc}}
                                      </p>
                                    </div>
                                    <div
                                      class="flex gap-2 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Consignee Account-Type :
                                      </p>
                                      <p class="w-2/3">
                                        {{$booking->consignee_acc_type}}
                                      </p>
                                    </div>



                                    <div
                                      class="flex gap-2 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Commodity Type:
                                      </p>
                                      <p class="w-2/3">{{$booking->commodity_type}}</p>
                                    </div>

                                    <div
                                      class="flex gap-2 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Commercial Invoice No. :
                                      </p>
                                      <p class="w-2/3">
                                        {{$booking->commercial_invoice_no}}
                                      </p>
                                    </div>
                                    <div
                                      class="flex gap-2 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Commercial Invoice Date :
                                      </p>
                                      <p class="w-2/3">
                                        {{$booking->commercial_invoice_date}}
                                      </p>
                                    </div>



                                    <div
                                      class="flex gap-2 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        POD :
                                      </p>
                                      <p class="w-2/3">{{$booking->POD}}</p>
                                    </div>
                                    <div
                                      class="flex gap-2 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        POL :
                                      </p>
                                      <p class="w-2/3">{{$booking->POL}}</p>
                                    </div>

                                    <div
                                      class="flex gap-4 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Status :
                                      </p>

                                      <p class="w-2/3">{{$booking->status}}</p>
                                    </div>
                                  </div>

                                  <!-- Right -->
                                  <div>
                                    <div
                                      class="flex gap-4 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Reference Booking No. :
                                      </p>
                                      <p class="w-2/3">
                                        {{$booking->ref_booking_no}}
                                      </p>
                                    </div>

                                    <div
                                      class="flex gap-4 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Combined Transport :
                                      </p>
                                      <p class="w-2/3">
                                        {{$booking->combined_transports}}
                                      </p>
                                    </div>

                                    <div
                                      class="flex gap-4 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Service Type :
                                      </p>
                                      <p class="w-2/3">
                                        {{$booking->service_type}}
                                      </p>
                                    </div>

                                    <div
                                      class="flex gap-4 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Sales Person :
                                      </p>
                                      <p class="w-2/3">
                                        {{$booking->sales_person}}
                                      </p>
                                    </div>

                                    <div
                                      class="flex gap-4 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Estimated Handover Date :
                                      </p>
                                      <p class="w-2/3">
                                        {{$booking->estimated_handover_date}}
                                      </p>
                                    </div>

                                    <div
                                      class="flex gap-4 items-start mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        LC Number :
                                      </p>
                                      <p class="w-2/3">
                                        {{$booking->lc_no}}
                                      </p>
                                    </div>

                                    <div
                                      class="flex gap-4 items-center mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        LC Date :
                                      </p>
                                      <p class="w-2/3">{{$booking->lc_date}}</p>
                                    </div>


                                    <div
                                      class="flex gap-4 items-start mb-4"
                                    >
                                      <p class="w-1/3 text-end">
                                        Description of Good :
                                      </p>
                                      <p class="w-2/3">
                                        {{$booking->description_good}}
                                      </p>
                                    </div>
                                  </div>
                                </div>

                                <!-- Table -->
                                <div class="relative overflow-x-auto">
                                  <table
                                    class="w-full text-sm text-left border narrowTable"
                                  >
                                  <thead class="text-[13px] bg-gray-50 border-b">
                                    <tr>

                                        <th rowspan="2">PO#</th>
                                        <th rowspan="2">S/O</th>
                                        <th rowspan="2">Carton</th>
                                        <th rowspan="2">Package</th>
                                        <th rowspan="2">Pieces</th>
                                        <th colspan="3" class="border-b">Dimension</th>
                                        <th rowspan="2">CBM</th>
                                        <th rowspan="2">GWT</th>
                                        <th rowspan="2">MWT</th>
                                        <th rowspan="2">Status</th>
                                    </tr>
                                    <tr>
                                        <th>Length</th>
                                        <th>Width</th>

                                        <th>Hight</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                      < class="border-b">
                                        <td>{{$booking->po}}</td>
                                        <td>{{$booking->so}}</td>
                                        <td>{{$booking->carton}}</td>
                                        <td>{{$booking->package}}</td>
                                        <td>{{$booking->piece}}</td>

                                            <td>{{$booking->length}}</td>
                                            <td>{{$booking->width}}</td>
                                            <td>{{$booking->height}}</td>

                                        <td>{{$booking->chargeable_weight}}</td>
                                        <td>{{$booking->gwt}}</td>
                                        <td>{{$booking->mwt}}</td>
                                      </tr>

                                    </tbody>

                                    <tfoot>
                                      <tr>
                                        <td
                                          colspan="5"
                                          class="text-center"
                                        >
                                          Total
                                        </td>
                                        <td>00.00</td>
                                        <td></td>
                                        <td>00.00</td>

                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>00.00</td>
                                        <td>00.00</td>
                                      </tr>
                                    </tfoot>
                                  </table>
                                </div>
                              </div>
                              @endif


                            </div>
                          </div>
                        </div>
                      </div>

                      <div>
                        <form action="{{ route('admin.delete-booking', $booking->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button
                          class="hover:text-red-600 duration-300"
                        >
                          <i class="fa-solid fa-trash-can"></i>
                        </button>
                        </form>

                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <!-- Pagination -->
          <nav class="flex items-center justify-between pt-4">
            <span class="text-sm font-normal text-gray-500">
              Showing
              <span class="font-semibold text-gray-900"> 1-10 </span>
              of
              <span class="font-semibold text-gray-900"> 1000 </span>
            </span>

            <ul class="inline-flex items-center -space-x-px">
              <li>
                <a
                  href="#"
                  class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100"
                >
                  <i class="fa-solid fa-chevron-left"></i>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100"
                >
                  1
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100"
                >
                  2
                </a>
              </li>
              <li>
                <a
                  href="#"
                  aria-current="page"
                  class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100"
                >
                  3
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100"
                  >...</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100"
                >
                  100
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100"
                >
                  <i class="fa-solid fa-chevron-right"></i>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
@endsection
