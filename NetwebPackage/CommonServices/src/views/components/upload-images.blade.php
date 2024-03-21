<style>
    .text-center {
        text-align: center;
    }
    .image-file {
        display: none;
    }
    .image-delete {
        position: absolute;
        right: 0;
        background: red;
        color: white;
        padding: 1px 10px;
        text-decoration: none;
    }
</style>
<div class="row my-4">
    <div class="col-sm-12 text-center">

        {!! Form::hidden('service', $service ?? null, ['id' => 'service']) !!}
        {!! Form::hidden('service_id', $serviceId ?? null, ['id' => 'service_id']) !!}
        {!! Form::hidden('path', $path ?? null, ['id' => 'path']) !!}

        <button type="button" class="btn btn-primary" onclick="openDialogBox(this)">Choose Files</button>

        {!! Form::file('images[]', ['class' => 'form-control image-file', 'id' => 'image', 'accept' => 'image/*', 'onchange' =>
        'ImageUpload(this)', $multiple ? 'multiple': '']) !!}

    </div>

    <div class="col-sm-12 my-4">
        <div class="row displayImages"></div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {

    });

    function openDialogBox(selector) {
        // Get the next sibling element
        var nextInput = selector.nextElementSibling;

        // Check if the next sibling element is an input element
        if (nextInput && nextInput.tagName === 'INPUT') {
            // Create and dispatch a click event on the input element
            var clickEvent = new MouseEvent('click', {
                bubbles: true,
                cancelable: true,
                view: window
            });
            nextInput.dispatchEvent(clickEvent);
        }
    }

</script>

<script>
    function clickImage() {
        $('#image').trigger('click');
    }
    displayImages()
    function ImageUpload(element){
        var formdata = new FormData($('form')[0]);
        if(image != null){

            $.ajax({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: ' {{ route("services.images.upload")}} ',
                type: 'post',
                data: formdata,
                processData: false,
                contentType: false,
                success: function(response){
                    console.log(response);
                    displayImages()
                }
            })
        }
    }

    function displayImages(){
        var service = $('#service').val();
        var service_id = $('#service_id').val();
        var path = $('#path').val();
        if(service != null && service_id != null){
            $.ajax({
                url: '{{ route("services.images.get") }}',
                type:  'get',
                data: {
                    service: service,
                    service_id: service_id,
                    path : path,
                },
                success: function(response){
                    $('.displayImages').html('')
                    if(typeof response == 'object'){
                        $.each(response, function(key, value){
                            console.log(value);
                            $('.displayImages').append(ImageComponent(value.id, value.image));
                        })
                    }
                }
            })
        }
    }

    function DeleteImage(id){
        event.preventDefault();
        if(id != null){
            $.ajax({
                url: '{{ route("services.images.delete") }}',
                type: 'get',
                data: {id: id},
                success: function(response){
                    displayImages();
                }
            })
        }
    }
    function ImageComponent(id, imagePath){
        return `<div class="col-sm-3">
                <div class="card">
                    <a href="javascript:void(0)" class="closer image-delete" onclick="DeleteImage(${id})">x</a>
                    <div class="card-img-wrapper">
                        <img class="card-img-top" src="${imagePath}" alt="Card image cap" height="250">
                    </div>
                </div>
            </div>`;
    }
</script>
