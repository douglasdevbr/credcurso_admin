<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Api-Panel</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Jquery Core Js -->
    <script src="{{URL::asset('public/plugins/jquery/jquery.min.js')}}"></script>


</head>
<body>

<h1>
    URL::   {{url('/').'/api/single-job-detail'}}

</h1>
<form method="POST" enctype="multipart/form-data" action="{{url('/api/single-job-detail')}}" >

    Seeker(seeker_id) ::<span style="color: red">*</span>
    {{--<select name="seeker_id">--}}
        {{--<option value="">Please select</option>--}}
        {{--@foreach($seeker as $key_seeker => $value_seeker)--}}
            {{--<option value="{{$value_seeker['id']}}">{{$value_seeker['email']}}</option>--}}
        {{--@endforeach--}}
    {{--</select>--}}
    <input type="text" required name="seeker_id">
    <br />
    <br />

    Job(job_id) ::<span style="color: red">*</span>  <select name="job_id">
        <option value="">Please select</option>
        @foreach($jobs as $key_job => $value_job)
            <option value="{{$value_job['id']}}">{{$value_job['specialization']}}</option>
        @endforeach
    </select>
    <br />
    <br />



    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">Submit</button>

</form>
<script type="text/javascript">
    $(document).ready(function () {

        $(document).on('click','#add_qulaification' ,function () {
            var counter = parseInt($(this).attr('data-counter'));
            $(this).attr('data-counter',+counter+1);
            var clone = $(this).prev().clone();
            clone.find('input[type=text]').val('');
            $(this).before(clone);

        });

        $(document).on('click','#remove_qulaification' ,function () {
            var counter_rom = parseInt($(this).prev().attr('data-counter'));
            if(counter_rom > 1){
                $(this).prev().prev().remove();
                $(this).prev().attr('data-counter',+counter_rom-1);
            }
        });

        $(document).on('click','input[name=work_experience]' ,function () {
            if ($("#freasher").is(":checked")) {
                $('.experience_cadidate').hide()
            }

            if ($("#experience").is(":checked")) {
                $('.experience_cadidate').show()
            }


        });

    });

</script>

</body>
</html>