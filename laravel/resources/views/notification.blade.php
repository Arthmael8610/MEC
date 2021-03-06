
<div class='notifications'>


    @if(session()->get('success'))
        <script>
            $.notify({
                message: '{{ Session::get('success') }}',
                type:'success-solid-active'
            },{
            delay:'5000'
            })
        </script>
        @php
            Session::forget('success');
        @endphp
    @endif

    @if(session()->get('info'))
        <script>
            $.notify({
                message: '{{ Session::get('info') }}',
                type:'info-solid-active'
            },{
                delay:'30000'
            })
        </script>
        @php
            Session::forget('info');
        @endphp
    @endif

    @if(session()->get('warning'))
        <script>
            $.notify({
                message: '{{ Session::get('warning') }}',
                type:'warning-solid-active'
            },{
                delay:'5000'
            })
        </script>
        @php
            Session::forget('warning');
        @endphp
    @endif

    @if(session()->get('error'))
        <script>
            $.notify({
                message: '{{ Session::get('error') }}',
                type:'danger-solid-active'
            },{
                delay:'5000'
            })
        </script>
        @php
            Session::forget('error');
        @endphp
    @endif
    @if(Session::has('imperror'))
        <script>
            $.notify({
                message: '{{ Session::get('imperror') }}',
                type:'danger-solid-active',
                timer:5000
            },{
                delay:'5000'
            })
        </script>
        @php
            Session::forget('imperror');
        @endphp
    @endif
    @if(Session::has('impinfo'))
        <script>
            $.notify({
                message: '{{ Session::get('imperror') }}',
                type:'info-solid-active',
            },{
                delay:'0'
            })
        </script>
        @php
            Session::forget('impinfo');
        @endphp
    @endif
</div>