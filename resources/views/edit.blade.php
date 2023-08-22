@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>


    <div class="col-lg-8">
        <form method="post" action="/update/{{$spko->id_spko}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="category" class="form-label">Pilih Operator</label>
                <select class="form-select" name="id_operatorspk" autofocus>
                    @foreach ($employee as $employes)
                        <option value="{{ $employes->id_employee }}"
                            {{ $employes->id_employee == $spko->employee ? 'selected' : '' }}>{{ $employes->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Pilih Proses</label>
                <select class="form-select" name="proses">
                    <option value="Cor" {{ 'cor' == $spko->employee ? 'selected' : '' }}>Cor</option>
                    <option value="Brush" {{ 'Brush' == $spko->employee ? 'selected' : '' }}>Brush</option>
                    <option value="Bombing" {{ 'Bombing' == $spko->employee ? 'selected' : '' }}>Bombing</option>
                    <option value="Slep" {{ 'Slep' == $spko->employee ? 'selected' : '' }}>Slep</option>
                </select>
            </div>
            @foreach ($spko->items as $item)
                <div class="row mt-2">
                    <div class="col">
                        <select class="form-select" name="produk[]" autofocus>
                            @foreach ($product as $produk)
                                <option value="{{ $produk->id_product }}"
                                    {{ $produk->id_product == $item->id_product ? 'selected' : '' }}>
                                    {{ $produk->description }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <input type="number" name="qty[]" class="form-control" placeholder="QTY"
                            value="{{ $item->qty }}">
                    </div>
                </div>
            @endforeach

            <div id="items">

            </div>
            <div>
                <button id="add" class="btn add-more button-yellow uppercase" type="button">+ Add another
                    referral</button>
                <button class="delete btn button-white uppercase">- Remove referral</button>
            </div>

            <div class="row mt-5">
                <button type="submit" class="btn btn-primary">UPDATE</button>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script>
        $(".delete").hide();
        //when the Add Field button is clicked
        $("#add").click(function(e) {
            $(".delete").fadeIn("1500");
            //Append a new row of code to the "#items" div
            $("#items").append(
                `<div class="row mt-2">
                <div class="col">
                    <select class="form-select" name="produk[]" autofocus>
                        @foreach ($product as $produk)
                            <option value="{{ $produk->id_product }}" selected>{{ $produk->description }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <input type="number" name="qty[]" class="form-control" placeholder="QTY">
                </div>
            </div>`
            );
        });

        $("body").on("click", ".delete", function(e) {
            $(".next-referral").last().remove();
        });
    </script>
@endsection
