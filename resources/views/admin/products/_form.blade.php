<!-- /************************************** */ -->

<!-- alert message -->
<div class="card-content collapse show">
    <div class="card-body">
        <form class="form" action="" method="POST" enctype="multipart/form-data">

            <div class="form-body">
                <h4 class="form-section"><i class="ft-home"></i> بيانات المنتج </h4>

                <!-- *** -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="" class="card-title">اسم المنتج :</label>
                        <input type="text" name="name" value="{{ old('name', $product->name) }}"
                            class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="" class="card-title">السعر :</label>
                        <input type="text" name="price" value="{{ old('price', $product->price) }}"
                            class="form-control @error('name') is-invalid @enderror">
                        @error('price')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="" class="card-title">الكمية :</label>
                        <input type="text" name="quantity" value="{{ old('quantity', $product->quantity) }}"
                            class="form-control @error('name') is-invalid @enderror">
                        @error('quantity')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="" class="card-title">الصورة :</label>
                        <div class="mb-2">
                            <img src="{{ $product->image_url }}" height="200" alt="">
                        </div>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- status -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="" class="card-title ml-1">الحالة:</label>
                            <div class="form-check">
                                <label class="card-title ml-1">
                                    <input type="radio" name="status" value="فعال" @if(old('status', $product->status)
                                    == 'فعال') checked @endif>
                                    فعال
                                </label>
                                <label class="card-title ml-1">
                                    <input type="radio" name="status" value="غير فعال" @if(old('status',
                                        $product->status) == 'غير فعال') checked @endif>
                                    غير فعال
                                </label>
                            </div>
                            @error('status')
                            <p class="invalid-feedback d-block">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!--  -->

            </div>

            <!-- col-2 mx-auto -->
            <div class="form-actions">
                <button type="submit" class="btn btn-primary"><i
                        class="la la-check-square-o"></i>{{ $button_label ?? 'حفظ' }}</button>
            </div>

        </form>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- // Basic form layout section end -->
</div>
</div>
</div>


<!-- **************************************** -->

@push('css')
<link rel="stylesheet" href="{{ asset('js/tagify/tagify.css') }}">
@endpush