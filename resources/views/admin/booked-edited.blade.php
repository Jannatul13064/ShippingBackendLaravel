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
              <span class="ml-1 md:ml-2"> Add Booking </span>
            </div>
          </li>
        </ol>
      </nav>

      <div class="flex items-center gap-2 text-white">
        <i class="fa-solid fa-calendar-days"></i>
        <p>14-06-2023</p>
      </div>
    </div>

    <div class="border rounded my-4">
        @if(session('success'))
    <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
        {{ session('success') }}
    </div>
@endif

      <div
        class="border-b p-2 bg-gray-100 flex items-center justify-between"
      >
        <div class="flex items-center gap-2 font-medium">
          <i class="fa-solid fa-folder-plus"></i>
          <span>Add Booking</span>
        </div>
      </div>
      {{-- {{ route('post.store') }} --}}


      <form action="{{ route('admin.edit-booking', ['id' => $booking->id]) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="grid grid-cols-2 gap-20 justify-between">
            <!-- Left -->
            <div>
                <div class="flex gap-4 items-center mb-4">
                <label class="w-1/3 text-end">Transport Mode :</label>
                <div class="w-2/3">
                    <select class="select" name="mode">
                    <option hidden>{{$booking->mode}}</option>
                    <option>sea</option>
                    <option>air</option>
                    <option>multimodal</option>
                    </select>
                </div>
                </div>

                <div class="flex gap-4 items-center mb-4">
                <label class="w-1/3 text-end">Freight Term</label>
                <div class="w-2/3">
                    <select class="select" name="freight_term">
                    <option hidden>{{$booking->freight_term}}</option>
                    <option>pre-paid</option>
                    <option>collected</option>
                    </select>
                </div>
                </div>

                <div class="flex gap-4 items-center mb-4">
                <label class="w-1/3 text-end">Sales Type :</label>
                <div class="w-2/3">
                    <select class="select"  name="sales_type">
                    <option hidden>{{$booking->sales_type}}</option>
                    <option>export</option>
                    <option >import</option>
                    </select>
                </div>
                </div>

                <div class="flex gap-4 items-center mb-4">
                <label class="w-1/3 text-end">Shipper Bank :</label>
                <div class="w-2/3">
                    <select class="select" name="shipper_bank">
                    <option hidden>{{$booking->shipper_bank}}</option>
                    <option>Shipper Bank 1</option>
                    <option>Shipper Bank 2</option>
                    </select>
                </div>
                </div>
                <div class="flex gap-4 items-center mb-4">
                    <label class="w-1/3 text-end">Key account :</label>
                    <div class="w-2/3">
                        <input
                        type="text"
                        class="datepicker"
                        name="key_account"
                        placeholder="Account Key"
                        value="{{$booking->key_account}}"
                        />
                    </div>
                </div>

                <div class="flex gap-4 items-center mb-4">
                    <label class="w-1/3 text-end">Shipper Name:</label>
                    <div class="w-2/3">
                        <input
                            type="text"
                            class="datepicker"
                            name="shipper_name"
                            placeholder="Shipper Name"
                            value="{{$booking->shipper_name}}"
                            />

                    </div>
                </div>
                <div class="flex gap-4 items-start mb-4">
                    <label class="w-1/3 text-end">
                        Shipper Address :
                    </label>
                    <div class="w-2/3">
                        <textarea placeholder="Shipper Address"
                        name="shipper_address"
                        >{{$booking->shipper_address}}</textarea>
                    </div>
                    </div>


                <div class="flex gap-4 items-center mb-4">
                <label class="w-1/3 text-end">Agreement Type :</label>

                <div class="w-2/3 flex gap-3 items-center text-dark/90">
                    <div class="flex items-center gap-1">
                    <input
                        id="lc"
                        type="radio"
                        name="agreement_type"
                        class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 cursor-pointer"
                        value="lc"

                        {{ $booking->agreement_type == 'lc' ? 'checked' : '' }}
                    />
                    <label for="lc" class="cursor-pointer"> LC </label>
                    </div>

                    <div class="flex items-center gap-1">
                    <input
                        id="sc"
                        type="radio"
                        name="agreement_type"
                        class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 cursor-pointer"
                        value="sc"
                        {{ $booking->agreement_type == 'sc' ? 'checked' : '' }}
                    />
                    <label for="sc" class="cursor-pointer"> SC </label>
                    </div>

                    <div class="flex items-center gap-1">
                    <input
                        id="tt"
                        type="radio"
                        name="agreement_type"
                        class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 cursor-pointer"
                        value="tt"
                        {{ $booking->agreement_type == 'tt' ? 'checked' : '' }}
                    />
                    <label for="tt" class="cursor-pointer"> TT </label>
                    </div>

                    <div class="flex items-center gap-2">
                    <input
                        id="pi"
                        type="radio"
                        name="agreement_type"
                        class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 cursor-pointer"
                        value="pi"
                        {{ $booking->agreement_type == 'pi' ? 'checked' : '' }}
                    />
                    <label for="pi" class="cursor-pointer"> p/I </label>
                    </div>
                </div>
                </div>

                <div class="flex gap-4 items-center mb-4">
                <label class="w-1/3 text-end"> Agent Name:</label>
                <div class="w-2/3">
                    <select class="select" name="agent_name">
                    <option hidden>{{$booking->agent_name}}</option>
                    <option >Agent 1</option>
                    <option>Agent 2</option>
                    <option>Agent 3</option>
                    </select>
                </div>
                </div>

                <div class="flex gap-4 items-start mb-4">
                    <label class="w-1/3 text-end">
                        Agent Address :
                    </label>
                    <div class="w-2/3">
                        <textarea placeholder="Enter Agent Address" name="agent_address">{{$booking->agent_address}}</textarea>
                    </div>
                    </div>
                <div class="flex gap-4 items-start mb-4">
                    <label class="w-1/3 text-end">
                        Agent Emergency Address :
                    </label>
                    <div class="w-2/3">
                        <textarea placeholder="Enter Agent Address" name="agent_emergency_address">{{$booking->agent_emergency_address}}</textarea>
                    </div>
                </div>

                <div class="flex gap-4 items-center mb-4">
                    <label class="w-1/3 text-end">Agent Contact No :</label>
                    <input
                        type="text"
                        placeholder="Agent Contact No"
                        class="w-2/3"
                        name="agent_contact_no"
                        value="{{$booking->agent_contact_no}}"
                    />
                </div>
                <div class="flex gap-4 items-center mb-4">
                    <label class="w-1/3 text-end">Agent Bank Account :</label>
                    <input
                        type="text"
                        placeholder="Agent Bank Account"
                        class="w-2/3"
                        name="agent_bank_acc"
                        value="{{$booking->agent_bank_acc}}"
                    />
                </div>



                <div class="flex gap-4 items-center mb-4">
                <label class="w-1/3 text-end"> Consignee Name:</label>
                <div class="w-2/3">
                    <input
                    type="text"
                    placeholder="Enter Consignee Name"
                    name="consignee_name"
                    value="{{$booking->consignee_name}}"
                    >
                </div>
                </div>
                <div class="flex gap-4 items-start mb-4">
                    <label class="w-1/3 text-end">
                        Consignee Address :
                    </label>
                    <div class="w-2/3">
                        <textarea placeholder="Enter Agent Address" name="consignee_address">{{$booking->consignee_address}}</textarea>
                    </div>
                </div>


                <div class="flex gap-4 items-center mb-4">
                    <label class="w-1/3 text-end">Consignee Bank Account :</label>
                    <input
                        type="text"
                        placeholder="Consignee Bank Account"
                        class="w-2/3"
                        name="consignee_bank_acc"
                        value="{{$booking->consignee_bank_acc}}"
                    />
                </div>
                </div>

                <div class="flex gap-4 items-center mb-4">
                <label class="w-1/3 text-end">Consignee Account type :</label>
                <div class="w-2/3">
                    <select class="select" name="consignee_acc_type">
                    <option hidden>{{$booking->consignee_acc_type}}</option>
                    <option>Mutual</option>
                    <option>Personal</option>
                    <option>Business</option>
                    </select>
                </div>
                </div>

                <div class="flex gap-4 items-center mb-4">
                <label class="w-1/3 text-end">
                    Commodity Type :
                </label>
                <div class="w-2/3">
                    <select class="select" name="commodity_type">
                    <option hidden>{{$booking->commodity_type}}</option>
                    <option>general</option>
                    <option >perishable</option>
                    <option>danger</option>
                    <option>oversized</option>
                    </select>
                </div>
                </div>

                <div class="flex gap-4 items-center mb-4">
                <label class="w-1/3 text-end">
                    Commercial_invoice_no
                </label>
                <input
                    type="text"
                    placeholder="Commercial Invoice"
                    class="w-2/3"
                    name="commercial_invoice_no"
                    value="{{$booking->commercial_invoice_no}}"
                />
                </div>
                <div class="flex gap-4 items-center mb-4">
                <label class="w-1/3 text-end">
                    Commercial Invoice Date :
                </label>
                <div class="w-2/3">
                    <input
                    type="text"
                    class="datepicker"
                    placeholder="17-06-2023"
                    name="commercial_invoice_date"
                    value="{{$booking->commercial_invoice_date}}"
                    />
                </div>
                </div>

                <div class="flex gap-4 items-center mb-4">
                <label class="w-1/3 text-end">POL :</label>
                <div class="w-2/3">
                    <select class="select" name="POL">
                    <option hidden >{{$booking->POL}}</option>
                    <option>POL 1</option>
                    <option>POL 2</option>
                    </select>
                </div>
                </div>


                <div class="flex gap-4 items-center mb-4">
                <label class="w-1/3 text-end">POD :</label>
                <div class="w-2/3">
                    <select class="select"  name="POD" >
                    <option hidden>{{$booking->POD}}</option>
                    <option>POD 1</option>
                    <option>POD 2</option>
                    </select>
                </div>
                </div>



                <div class="flex gap-4 items-center mb-4">
                <label class="w-1/3 text-end">Status :</label>

                <div class="w-2/3 flex gap-3 items-center text-dark/90">
                    <div class="flex items-center gap-1">
                    <input
                        id="opened"
                        type="radio"
                        name="status"
                        class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 cursor-pointer"
                        value="opened"
                        {{ $booking->status == 'opened' ? 'checked' : '' }}
                    />
                    <label for="opened" class="cursor-pointer">
                        Opened
                    </label>
                    </div>

                    <div class="flex items-center gap-1">
                    <input
                        id="issued"
                        type="radio"
                        name="status"
                        class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 cursor-pointer"
                        value="isssued"
                        {{ $booking->status == 'lc' ? 'isssued' : '' }}
                    />
                    <label for="issued" class="cursor-pointer">
                        Issued
                    </label>
                    </div>

                    <div class="flex items-center gap-1">
                    <input
                        id="reopened"
                        type="radio"
                        name="status"
                        class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 cursor-pointer"
                        value="reopened"
                        {{ $booking->status == 'reopened' ? 'isssued' : '' }}
                    />
                    <label for="reopened" class="cursor-pointer">
                        Reopened
                    </label>
                    </div>
                </div>
                </div>
            </div>

            <!-- Right -->
            <div>
                <div class="flex gap-4 items-center mb-4">
                <label class="w-1/3 text-end">
                    Reference Booking No. :
                </label>
                <input
                    type="text"
                    placeholder="Reference Booking No."
                    class="w-2/3"
                    name="ref_booking_no"
                    value="{{$booking->ref_booking_no}}"
                />
                </div>

                <div class="flex gap-4 items-center mb-4">
                <label class="w-1/3 text-end">
                    Combined Transports :
                </label>
                <div class="w-2/3">
                    <select class="select"  name="combined_transports" >
                    <option hidden>{{$booking->combined_transports}}</option>
                    <option>Combined Transport</option>
                    <option>Combined Transport</option>
                    </select>
                </div>
                </div>

                <div class="flex gap-4 items-center mb-4">
                <label class="w-1/3 text-end"> Service Type : </label>
                <div class="w-2/3">
                    <select class="select" name="service_type">
                    <option hidden>{{$booking->service_type}}</option>
                    <option>Service Type</option>
                    <option>Service Type</option>
                    </select>
                </div>
                </div>

                <div class="flex gap-4 items-center mb-4">
                <label class="w-1/3 text-end"> Sales Person : </label>
                <div class="w-2/3">
                    <select class="select"  name="sales_person">
                    <option hidden>{{$booking->sales_person}}</option>
                    <option>Sales Person</option>
                    <option>Sales Person</option>
                    </select>
                </div>
                </div>

                <div class="flex gap-4 items-center mb-4">
                <label class="w-1/3 text-end">Estimated Hand Over Date : </label>
                <div class="w-2/3">
                    <input
                    type="text"
                    class="datepicker"
                    placeholder="17-06-2023"
                    name="estimated_handover_date"
                    value="{{$booking->estimated_handover_date}}"
                    />
                </div>
                </div>





                <div class="flex gap-4 items-center mb-4">
                <label class="w-1/3 text-end">LC Number</label>
                <input
                    type="text"
                    placeholder="LC Number"
                    class="w-2/3"
                    name="lc_no"
                    value="{{$booking->lc_no}}"
                />
                </div>

                <div class="flex gap-4 items-center mb-4">
                <label class="w-1/3 text-end"> LC Date : </label>
                <div class="w-2/3">
                    <input
                    type="text"
                    class="datepicker"
                    placeholder="17-06-2023"
                    name="lc_date"
                    value="{{$booking->lc_date}}"
                    />
                </div>
                </div>



                <div class="flex gap-4 items-start mb-4">
                <label class="w-1/3 text-end">
                    Description of Good :
                </label>
                <div class="w-2/3">
                    <textarea
                    placeholder="Description of Good (max 1300 Char.)"
                    name="description_good"
                    >{{$booking->description_good}}</textarea>
                </div>
                </div>
            </div>
            </div>

            <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left border narrowTable">
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
                    <th rowspan="2">Action</th>
                </tr>
                <tr>
                    <th>Length</th>
                    <th>Width</th>

                    <th>Hight</th>
                </tr>
                </thead>

                <tbody>
                <tr class="border-b">
                    <td>
                    <select class="outline-none cursor-pointer" name="po">
                        <option hidden>CM</option>
                        <option>MM</option>
                        <option>NM</option>
                        <option>M</option>
                    </select>
                    </td>
                    <td class="w-28">
                    <input type="text" placeholder="S/O" name="so" value="{{$booking->so}}"/>
                    </td>
                    <td class="w-28">
                    <input type="text" placeholder="Carton" name="cartoon"  value="{{$booking->cartoon}}"/>
                    </td>
                    <td>
                        <input type="text" placeholder="Package" name="package"  value="{{$booking->package}}"/>
                    </td>
                    <td class="w-28">
                    <input type="text" placeholder="Pieces" name="piece"  value="{{$booking->piece}}"/>
                    </td>
                    <td class="w-28">
                    <input type="text" placeholder="Length" name="length"  value="{{$booking->length}}"/>
                    </td>
                    <td class="w-28">
                    <input type="text" placeholder="Width" name="width"  value="{{$booking->width}}"/>
                    </td>

                    <td class="w-28">
                    <input type="text" placeholder="height" name="height"  value="{{$booking->height}}"/>
                    </td>

                    <td class="w-28">
                    <input type="text" placeholder="CBM" name="chargeable_weight" disabled  value="{{$booking->chargeable_weight}}"/>
                    </td>

                    <td class="w-28">
                    <input type="text" placeholder="GWT" name="gwt"  value="{{$booking->gwt}}"/>
                    </td>
                    <td class="w-28">
                    <input type="text" placeholder="MWT" name="mwt"  value="{{$booking->mwt}}"/>
                    </td>

                    <td>
                    <div
                        class="cursor-pointer border py-2 px-3 rounded hover:bg-gray-100 duration-200"
                    >
                        add
                    </div>
                    </td>
                </tr>
                </tbody>

                <tfoot>
                <tr>
                    <td colspan="5" class="text-center">Total</td>
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

            <div class="mt-6 flex justify-center">
            <button class="px-5 py-2 bg-primary text-white rounded bg-blue-600">
                Update Booking
            </button>
            </div>
      </form>
    </div>
</div>

@endsection
