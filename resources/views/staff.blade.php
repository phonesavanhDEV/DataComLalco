@extends('layouts.nav')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    .text-primary {
        color: #0CDA90 !important;
    }

    .btn-primary {
        color: #fff;
        background-color: #0CDA90;
        border-color: #0CDA90;
    }

    .btn-primary {
        box-shadow: 0 3px 2px rgb(12 218 144 / 20%);
    }

</style>



{{-- <script>
    function request(id) {
        alert(id);

    }
</script> --}}

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>#ຕາຕະລາງພະນັກງານ</h5>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ລຳດັບ</th>
                                <th scope="col">ລະຫັດພະນັກງານ</th>
                                <th scope="col">ຊື່</th>
                                <th scope="col">ນາມສະກຸນ</th>
                                <th scope="col">ເພດ</th>
                                <th scope="col">ສັງກັດພະແນກ</th>
                                <th scope="col">ຫົວໜ້າພະແນກ</th>
                                <th scope="col">ສະຖາທີ່ສຳນັກງານ</th>
                                <th scope="col">ເບີໂທ</th>
                                <th scope="col">ແກ້ໄຂ</th>
                                <th scope="col">ລົບ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($staffs as $row)
                                <tr>
                                    <td>{{ $staffs->firstItem() + $loop->index }}</td>
                                    <td>{{ $row->id_staff }}</td>
                                    <td>{{ $row->name_staff }}</td>
                                    <td>{{ $row->surname_staff }}</td>
                                    <td>{{ $row->sex }}</td>
                                    <td>{{ $row->position_staff }}</td>
                                    <td>{{ $row->leader_department }}</td>
                                    <td>{{ $row->office }}</td>
                                    <td>{{ $row->tel }}</td>

                                    <td>
                                        {{-- <a href="" class="btn btn-success"
                                            onclick="request('{{ $row->id_staff }}');">ແກ້ໄຂ</a> --}}
                                        <a href=" {{ url('/staff/edit/'.$row->id) }}" class="btn btn-success" type="button"
                                            data-target="#quoteForm" data-toggle="modal">ແກ້ໄຂ</a>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-danger">ລົບ</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $staffs->links('vendor.pagination.custom') }}

                </div>

            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>#ແບບຟອມປ້ອນຂໍ້ມູນນພະນັກງານ</h5>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('addStaff') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @include('sweetalert::alert')
                            <div class="form-group col-lg-6">
                                <label class="font-weight-bold text-small" for="id">ລະຫັດພະນັກງານ<span
                                        class="text-primary ml-1">*</span></label>
                                <input class="form-control" id="id" type="id" name="id_staff"
                                    placeholder="ປ້ອນລະຫັດພະນັກງານ" required="" />
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-small" for="firstname">ຊື່ພະນັກງານ<span
                                        class="text-primary ml-1">*</span></label>
                                <input class="form-control" id="firstname" type="text" name="name_staff"
                                    placeholder="ປ້ອນຊື່ພະນັກງານ" required="" />
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-small" for="lastname">ນາມສະກຸນ<span
                                        class="text-primary ml-1">*</span></label>
                                <input class="form-control" id="lastname" type="text" name="surname_staff"
                                    placeholder="ປ້ອນນາມສະກຸນ" required="" />
                            </div>
                            <div class="form-group col-lg-12">
                                <div class="row m-2">
                                    <label class="font-weight-bold text-small" for="">ເພດ<span
                                            class="text-primary ml-1">*</span></label>
                                    <div class="form-check m-4">
                                        <input class="form-check-input" type="radio" name="sex" id="flexRadioDefault1"
                                            value="ຊາຍ">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            ຊາຍ
                                        </label>
                                    </div>
                                    <div class="form-check m-4">
                                        <input class="form-check-input" type="radio" name="sex" id="flexRadioDefault2"
                                            value="ຍິງ">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            ຍິງ
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-small" for="position_staff">ສັງກັດພະແນກ<span
                                        class="text-primary ml-1">*</span></label>
                                <input class="form-control" id="position_staff" type="text" name="position_staff"
                                    placeholder="ປ້ອນສັງກັດພະແນກ" required="" />
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-small" for="leader_department">ຫົວໜ້າພະແນກ<span
                                        class="text-primary ml-1">*</span></label>
                                <input class="form-control" id="leader_department" type="text" name="leader_department"
                                    placeholder="ປ້ອນຫົວໜ້າພະແນກ" required="" />
                            </div>
                            <div class="form-group col-lg-12">
                                <div class="input-group mb-lg-3">
                                    <label class="input-group-text" for="inputGroupSelect01">ສະຖານທີ່ສຳນັກງານ</label>
                                    <select class="form-select" id="inputGroupSelect01" name="office">
                                        <option selected>ກະລຸນາເລືອກ...</option>
                                        <option value="ສຳນັກງານໃຫຍ່">ສຳນັກງານໃຫຍ່</option>
                                        <option value="ສາຂາຫຼວງພະບາງ">ສາຂາຫຼວງພະບາງ</option>
                                        <option value="ສາຂາສະຫວັນນະເຂດ">ສາຂາສະຫວັນນະເຂດ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="font-weight-bold text-small" for="lastname">ເບີໂທ<span
                                        class="text-primary ml-1">*</span></label>
                                <input class="form-control" id="lastname" type="tel" name="tel" placeholder="ປ້ອນເບີໂທ"
                                    required="" />
                            </div>
                            <input type="submit" value="ບັນທຶກ" class="btn btn-secondary">
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!--GET a QUOTE MODAL -->
        <div class="modal fade" id="quoteForm" tabindex="-1" role="dialog" aria-labelledby="quoteForm"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content p-md-3">
                    <div class="modal-header">
                        <h4 class="modal-title">#ແບບຟອມ <span class="text-primary">ແກ້ໄຂ</span></h4>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label class="font-weight-bold text-small" for="id">ລະຫັດພະນັກງານ<span
                                            class="text-primary ml-1">*</span></label>
                                    <input class="form-control" id="" type="text" name="id_staff"
                                        value="{{$row->id_staff}}" />
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-small" for="firstname">ຊື່<span
                                            class="text-primary ml-1">*</span></label>
                                    <input class="form-control" id="firstname" type="text" name="name_staff"
                                        value="{{ $row->name_staff }}" />
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-small" for="lastname">ນາມສະກຸນ<span
                                            class="text-primary ml-1">*</span></label>
                                    <input class="form-control" id="lastname" type="text" />
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-small" for="">ສັງກັດພະແນກ<span
                                            class="text-primary ml-1">*</span></label>
                                    <input class="form-control" type="text" />
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-small" for="">ຫົວໜ້າພະແນກ<span
                                            class="text-primary ml-1">*</span></label>
                                    <input class="form-control" id="projecttype" type="text" />
                                </div>
                                {{-- <div class="form-group col-lg-6">
                           <label class="font-weight-bold text-small"
                               for="inputGroupSelect01">ສະຖານທີ່ສຳນັກງານ<span class="text-primary ml-1">*</label>
                           <select class="form-select" id="inputGroupSelect01" name="">
                               <option selected>ກະລຸນາເລືອກ...</option>
                               <option value="ສຳນັກງານໃຫຍ່">ສຳນັກງານໃຫຍ່</option>
                               <option value="ສາຂາຫຼວງພະບາງ">ສາຂາຫຼວງພະບາງ</option>
                               <option value="ສາຂາສະຫວັນນະເຂດ">ສາຂາສະຫວັນນະເຂດ</option>
                           </select>
                       </div> --}}
                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-small" for="">ເບີໂທ</label>
                                    <input class="form-control" id="phone" type="tel" />
                                </div>

                                <div class="form-group col-lg-12">
                                    <button class="btn btn-success" type="button">ອັບເດດ</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
