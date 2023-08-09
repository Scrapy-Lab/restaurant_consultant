<div class="col-lg-6 col-md-12 split-box-container-setting text-center p-md-0">
    <div class="split-container-setting">
        <div class="main-title text-center text-lg-left mb-lg-4 wow fadeIn" data-wow-delay="300ms">
            <h5 class="textColor-white"> Have any questions? </h5>
            <h2 class="textColor-white" class="mb-2rem"> Request a <b>call back</b></h2>
            <h5 class="textColor-white"> I would like to discuss: </h5>
        </div>

        <div class="request-form">
            <form method="post" wire:submit.prevent="save" class="request-form-outer" id="contact-form-data">
                <div class="row">
                    <div class="col-sm-12" id="result"></div>
                    <div class="col-md-12 col-sm-12">
                        <div class="request-form-textfield pb-4">
                            <select class="form-control" wire:model.lazy="service_id" title="service_id" name="service_id" id="service_ids" required>
                                <option selected value="0">Select Service</option>
                                <option value="1">Service 1</option>
                                <option value="2">Service 2</option>
                                <option value="3">Service 3</option>
                            </select>
                            @if ($errors->has('service_id'))
                                <span style="color: red">{{ $errors->first('service_id') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="request-form-textfield pb-4">
                            <input type="text" placeholder="Name" class="form-control mb-0" wire:model.lazy="name" required=""
                                id="name" name="name">
                            @if ($errors->has('name'))
                                <span style="color: red">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="request-form-textfield pb-4">
                            <input type="tel" wire:model.lazy="mobile_no" name="mobile_no" placeholder="Contact No" class="form-control mb-0" wire:model.lazy="mobile_no" required=""
                                id="phone" >
                            @if ($errors->has('mobile_no'))
                                <span style="color: red">{{ $errors->first('mobile_no') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="request-form-textfield pb-4">
                            <input type="email" placeholder="Email" class="form-control mb-0" wire:model.lazy="email" required=""
                                id="email" >
                            @if ($errors->has('email'))
                                <span style="color: red">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="request-form-textfield pb-4">
                            <textarea placeholder="Enter your query..." class="form-control mb-0" wire:model.lazy="msg" name="msg"></textarea>
                            @if ($errors->has('msg'))
                                <span style="color: red">{{ $errors->first('msg') }}</span>
                            @endif
                        </div>
                    </div>

                    {{-- <button type="submit" class="theme-btn btn-style-one clearfix">
                        <span class="btn-wrap">
                            <span class="text-one">book a Call</span>
                            <span class="text-two">book a call</span>
                        </span>
                    </button> --}}
                    <div class="col-lg-12 pt-xs-25px text-lg-left text-center">

                        <button class="btn-setting btn-scale btn-blue text-white contact_btn" type="submit"
                            class="theme-btn btn-style-one clearfix">
                            request now
                        </button>
                        <div class="mt-2">
                            @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
