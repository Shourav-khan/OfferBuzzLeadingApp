<div>
    <form wire:submit.prevent="lead" action="#" method="POST"  class="row g-3 container-fluid" >



       @if($currentStep == 1)

        <div class="p-3 fs-5" style="font-weight: 600">Lead Information</div>
        <div class="col-xxl-6 col-md-12 col-xl-6">
            <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Company Name</label>

            <select class="form-select"  name="company_name[]" multiple="multiple" wire:model="company_name" aria-label="Default select example">

                @foreach($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                @endforeach

            </select>
{{--            <input type="text" name="company_name[]" class="form-control border rounded-0 p-3"  id="inputEmail4" wire:model="company_name" placeholder="Write the Name">--}}
            <span class="text-danger">@error('company_name'){{$message}}@enderror</span>
        </div>
        <div class="col-xxl-6 col-xl-6">
            <label for="inputEmail4" class="form-label text-muted fs-6 "  style="letter-spacing: -1px;font-weight: 500">Owner Name</label>

            <select class="form-select"  name="owner_name[]" multiple="multiple" wire:model="owner_name" aria-label="Default select example">

                @foreach($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->owner_name }}</option>
                @endforeach

            </select>

{{--            <input type="text" name="owner_name" class="form-control border rounded-0 p-3" id="inputEmail4" wire:model="owner_name" placeholder="Write the Name">--}}
            <span class="text-danger">@error('owner_name'){{$message}}@enderror</span>
        </div>
        <div class="col-xxl-6 col-xl-6">
            <label for="inputEmail4" class="form-label text-muted fs-6 "  style="letter-spacing: -1px;font-weight: 500">Contact Person</label>

            <select class="form-select"  name="contact_person[]" multiple="multiple" wire:model="contact_person" aria-label="Default select example">

                @foreach($leads as $lead)
                    <option value="{{ $lead->id }}">{{ $lead->contact_person }}</option>
                @endforeach

            </select>

{{--            <input type="text" name="contact_person" class="form-control border rounded-0 p-3" id="inputEmail4" wire:model="contact_person" placeholder="Write the Name">--}}
            <span class="text-danger">@error('contact_person'){{$message}}@enderror</span>
        </div>
        <div class="col-xxl-6 col-xl-6">
            <label for="inputState" class="form-label fs-6 text-muted" style="letter-spacing: -1px;font-weight: 500">State</label>
            <input type="text" name="state" wire:model="state" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write the Name">
            <span class="text-danger">@error('state'){{$message}}@enderror</span>

        </div>
        <div class="col-xxl-6 col-xl-6">
            <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Email</label>
            <input type="email" name="email1" wire:model="email1" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Email Address">
            <span class="text-danger">@error('email1'){{$message}}@enderror</span>
        </div>
        <div class="col-xxl-6 col-xl-6">
            <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Phone Number</label>
            <input type="text" name="phone1" wire:model="phone1" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write the Phone Number">
            <span class="text-danger">@error('phone1'){{$message}}@enderror</span>
        </div>
        <div class="col-xxl-6 col-xl-6">
            <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Address</label>
            <input type="text" name="address1" wire:model="address1" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write the Address">
            <span class="text-danger">@error('address1'){{$message}}@enderror</span>
        </div>
        <div class="col-xxl-6 col-xl-6">
            <label for="inputState" class="form-label fs-6 text-muted" style="letter-spacing: -1px;font-weight: 500">Source By</label>
            <input type="text" name="source_by" wire:model="source_by" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write the Address">
            <span class="text-danger">@error('source_by'){{$message}}@enderror</span>

        </div>
        <div class="col-xxl-6 col-xl-6">
            <label for="inputState" class="form-label fs-6 text-muted" style="letter-spacing: -1px;font-weight: 500">Lead By</label>
            <select class="form-select " wire:model="lead_by" multiple="multiple" name="lead_by[]" aria-label="Default select example">

                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach


{{--                @foreach($users as $people)--}}
{{--                    <option  value="{{ $people->id }}">{{ $people->name }}</option>--}}
{{--                @endforeach--}}




            </select>

            <span class="text-danger">@error('lead_by'){{$message}}@enderror</span>
        </div>

        @endif

        {{--                                    <div class="col-xxl-6 col-xl-6">--}}
        {{--                                        <label for="inputState" class="form-label fs-6 text-muted" style="letter-spacing: -1px;font-weight: 500">Lead Status</label>--}}
        {{--                                        <input type="text" name="source_by" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write the Address">--}}

        {{--                                    </div>--}}







        @if($currentStep == 2)

        <div class="p-3 fs-5 mt-2" style="font-weight: 600">Additional Information</div>
        <div class="col-xxl-6 col-xl-6">
            <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Email</label>
            <input type="email" name="email2" wire:model="email2" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Email Address">
            <span class="text-danger">@error('email2'){{$message}}@enderror</span>
        </div>
        <div class="col-xxl-6 col-xl-6">
            <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Phone Number</label>
            <input type="text" name="phone2" wire:model="phone2" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write the Phone Number">
            <span class="text-danger">@error('phone2'){{$message}}@enderror</span>
        </div>
        <div class="col-xxl-6 col-xl-6">
            <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Business</label>
            <input type="text" name="business" wire:model="business" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write Business Name">
            <span class="text-danger">@error('business'){{$message}}@enderror</span>
        </div>
        <div class="col-xxl-6 col-xl-6">
            <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Branch</label>
            <input type="text" name="branch" wire:model="branch" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write branch name">
            <span class="text-danger">@error('branch'){{$message}}@enderror</span>
        </div>
        <div class="col-xxl-6 col-xl-6">
            <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Description</label>
            <input type="text" name="description" wire:model="description" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write the Description">
            <span class="text-danger">@error('description'){{$message}}@enderror</span>

        </div>
        <div class="col-xxl-6 col-xl-6">
            <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Address</label>
            <input type="email" name="address2" wire:model="address2" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write the Address">
            <span class="text-danger">@error('address2'){{$message}}@enderror</span>
        </div>
        <div class="col-xxl-6 col-xl-6">
            <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Logo</label>
            <input type="email" name="logo" wire:model="logo" class="form-control border rounded-0 p-5" id="inputEmail4">
            <span class="text-danger">@error('logo'){{$message}}@enderror</span>
        </div>
        <div class="col-xxl-6 col-xl-6">
            <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Owner Photo</label>
            <input type="email" name="photo" wire:model="owner_photo" class="form-control border rounded-0 p-5" id="inputEmail4">
            <span class="text-danger">@error('photo'){{$message}}@enderror</span>
        </div>

        @endif

        <div class="d-flex justify-content-between mb-5 pt-2 pb-2">

            @if($currentStep == 1)
                <button type="button" class="btn text-white border  rounded-0" wire:click="increaseValue()" style="width: 10rem;background-color: #CB0E00">Next</button>
            @endif

                @if($currentStep == 2)
                    <button type="button" class="btn text-white border rounded-0" wire:click="decreaseValue()" style="width: 10rem;background-color: #CB0E00">back</button>

                @endif

            @if($currentStep == 2)
                    <button type="submit" class="btn text-white border rounded-0" style="width: 10rem;background-color: #CB0E00">Save</button>
                @endif



        </div>


    </form>
</div>
