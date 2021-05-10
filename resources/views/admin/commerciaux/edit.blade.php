@extends('layout.base')

@section('subheader')
<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Details-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Modification du profil</h5>
            <!--end::Title-->
            <!--begin::Separator-->
            <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
            <!--end::Separator-->
            <!--begin::Search Form-->
            <div class="d-flex align-items-center" id="kt_subheader_search">
                {{-- <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">Renseigner les informations necessaire et soumettre</span> --}}
            </div>
            <!--end::Search Form-->
        </div>
        <!--end::Details-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Button-->
            <!--end::Button-->
            <!--begin::Dropdown-->
            <div class="btn-group ml-2">
                {{-- <button type="button" class="btn btn-primary font-weight-bold btn-sm px-3 font-size-base">Enregister</button> --}}
            </div>
            <!--end::Dropdown-->
        </div>
        <!--end::Toolbar-->
    </div>
</div>
@endsection

@section('content')
<div class="d-flex flex-column-fluid">

    <!--begin::Container-->
    <div class="container">
        @if(session('success'))
        <div class="alert alert-custom alert-outline-primary fade show mb-5" role="alert">
            <div class="alert-icon"><i class="flaticon2-check-mark"></i></div>
            <div class="alert-text">Creation avec success</div>
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="ki ki-close"></i></span>
                </button>
            </div>
        </div>
        @endif

        <!--begin::Card-->
        <div class="card">
        <form id="kt_form_1" class="form" method="POST" action="{{ route('commerciaux.update',['id'=>$commercial->id]) }}">
            @csrf
            @method('put')
            <div class="card-body">
                
             <div class="form-group row mt-3">
              <label class="col-lg-1 col-form-label text-lg-right">Nom:</label>
              <div class="col-lg-3">
                  <input type="text" name="nom" class="form-control" value="{{ $commercial->name }}"/>
               {{-- <span class="form-text text-muted">Please enter your full name</span> --}}
              </div>
              <label class="col-lg-1 col-form-label text-lg-right">Prénom:</label>
              <div class="col-lg-3">
                  <input type="text" name="prenom" class="form-control" value="{{ $commercial->prenom }}"/>
               {{-- <span class="form-text text-muted">Please enter your email</span> --}}
              </div>
              <label class="col-lg-1 col-form-label text-lg-right">Mot de passe:</label>
              <div class="col-lg-3">
               <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-key"></i></span></div>
                <input type="text" class="form-control" name="password" disabled/>
                   <span class="form-text text-muted text-danger">Vous ne pouvez pas modifier le mot de passe des commerciaux</span>
               </div>
              </div>
             </div>
           
             <div class="separator separator-dashed my-10"></div>
           
             <div class="form-group row">
              <label class="col-lg-1 col-form-label text-lg-right">Contact:</label>
              <div class="col-lg-3">
               <input type="text" id="kt_inputmask_3" name="telephone" class="form-control" value="{{ $commercial->telephone }}"/>
               {{-- <span class="form-text text-muted">Please enter your contact</span> --}}
              </div>
              <label class="col-lg-1 col-form-label text-lg-right">Email:</label>
              <div class="col-lg-3">
               <div class="input-group">
                <input type="email" name="email" class="form-control" value="{{ $commercial->email }}"/>
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="la la-envelope"></i>
                    </span>
                </div>
               </div>
               {{-- <span class="form-text text-muted">Please enter fax</span> --}}
              </div>
              <label class="col-lg-1 col-form-label text-lg-right">Address:</label>
              <div class="col-lg-3">
               <div class="input-group">
                <input type="text" name="adresse" class="form-control" value="{{ $commercial->adresse }}"/>
                <div class="input-group-append">
                    <span class="input-group-text"><i class="la la-map-marker"></i></span>
                </div>
               </div>
               {{-- <span class="form-text text-muted">Please enter your address</span> --}}
              </div>
             </div>
           
             <div class="separator separator-dashed my-10"></div>
           
             <div class="form-group row">
              <label class="col-lg-1 col-form-label text-lg-right">Photo de profil:</label>
              <div class="col-lg-3">
                <div class="image-input image-input-empty image-input-outline" id="kt_image_5" style="background-image: url({{ $commercial->imagePath }})">
                    <div class="image-input-wrapper"></div>
                   
                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Changer photo de profil">
                     <i class="fa fa-pen icon-sm text-muted"></i>
                     <input type="file" name="imagePath"  accept=".png, .jpg, .jpeg"/>
                     <input type="hidden" />
                    </label>
                   
                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                     <i class="ki ki-bold-close icon-xs text-muted"></i>
                    </span>
                   
                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                     <i class="ki ki-bold-close icon-xs text-muted"></i>
                    </span>
                   </div>
              </div>

              
              <label class="col-lg-1 col-form-label text-lg-right">Genre:</label>
              <div class="col-lg-3">
               <div class="radio-inline">
                <label class="radio radio-solid">
                 <input type="radio" name="genre" checked="checked" value="h" @if($commercial->genre == 'h') checked @endif/>
                 <span></span>
                 Homme
                </label>
                <label class="radio radio-solid">
                 <input type="radio" name="genre" value="f" @if($commercial->genre == 'f') checked @endif/>
                 <span></span>
                 Femme
                </label>
               </div>
               {{-- <span class="form-text text-muted">Please select user group</span> --}}
              </div>
             </div>
            </div>

            <div class="card-footer">
             <div class="row">
              <div class="col-lg-5"></div>
              <div class="col-lg-7">
               <button type="submit" class="btn btn-primary mr-2">Enregistrer</button>
               <button type="reset" class="btn btn-secondary">Cancel</button>
              </div>
             </div>
            </div>
        </form>
        </div>
           <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
@endsection

@section('script')
<!--begin::Page Scripts(used by this page)-->
<script src="/assets/js/pages/custom/user/add-user.js"></script>
<!--end::Page Scripts-->

<script>
    var avatar5 = new KTImageInput('kt_image_5');

// avatar5.on('cancel', function(imageInput) {
//  swal.fire({
//   title: 'Image successfully changed !',
//   type: 'success',
//   buttonsStyling: false,
//   confirmButtonText: 'Awesome!',
//   confirmButtonClass: 'btn btn-primary font-weight-bold'
//  });
// });

// avatar5.on('change', function(imageInput) {
//  swal.fire({
//   title: 'Image successfully changed !',
//   type: 'success',
//   buttonsStyling: false,
//   confirmButtonText: 'Awesome!',
//   confirmButtonClass: 'btn btn-primary font-weight-bold'
//  });
// });

// avatar5.on('remove', function(imageInput) {
//  swal.fire({
//   title: 'Image successfully removed !',
//   type: 'error',
//   buttonsStyling: false,
//   confirmButtonText: 'Got it!',
//   confirmButtonClass: 'btn btn-primary font-weight-bold'
//  });
// });
</script>

<script>
    FormValidation.formValidation(
 document.getElementById('kt_form_1'),
 {
  fields: {
   email: {
    validators: {
     notEmpty: {
      message: 'Email is required'
     },
     emailAddress: {
      message: 'The value is not a valid email address'
     }
    }
   },

   nom: {
    validators: {
     notEmpty: {
      message: 'nom is required'
     }
    }
   },

   prenom: {
    validators: {
     notEmpty: {
      message: 'prenom is required'
     }
    }
   },

   phone: {
    validators: {
     notEmpty: {
      message: 'US phone number is required'
     },
     phone: {
      country: 'US',
      message: 'The value is not a valid US phone number'
     }
    }
   },

   option: {
    validators: {
     notEmpty: {
      message: 'Please select an option'
     }
    }
   },

   options: {
    validators: {
     choice: {
      min:2,
      max:5,
      message: 'Please select at least 2 and maximum 5 options'
     }
    }
   },

   memo: {
    validators: {
     notEmpty: {
      message: 'Please enter memo text'
     },
     stringLength: {
      min:50,
      max:100,
      message: 'Please enter a menu within text length range 50 and 100'
     }
    }
   },

   checkbox: {
    validators: {
     choice: {
      min:1,
      message: 'Please kindly check this'
     }
    }
   },

   checkboxes: {
    validators: {
     choice: {
      min:2,
      max:5,
      message: 'Please check at least 1 and maximum 2 options'
     }
    }
   },

   radios: {
    validators: {
     choice: {
      min:1,
      message: 'Please kindly check this'
     }
    }
   },
  },

  plugins: {
   trigger: new FormValidation.plugins.Trigger(),
   // Bootstrap Framework Integration
   bootstrap: new FormValidation.plugins.Bootstrap(),
   // Validate fields when clicking the Submit button
   submitButton: new FormValidation.plugins.SubmitButton(),
            // Submit the form when all fields are valid
   defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
  }
 }
);
</script>
<script>
 // Class definition

var KTInputmask = function () {

// Private functions
var demos = function () {

 // phone number format
 $("#kt_inputmask_3").inputmask("mask", {
  "mask": "(242) "
 });




  definitions: {
   '*': {
    validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~\-]",
    cardinality: 1,
    casing: "lower"
   }
  }
 });
}

return {
 // public functions
 init: function() {
  demos();
 }
};
}();

jQuery(document).ready(function() {
KTInputmask.init();
});
</script>
@endsection