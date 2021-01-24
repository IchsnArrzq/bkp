@if(session()->has('success'))
<script>
    swal({
        icon: "success",
        text: "{{ session()->get('success') }}"
    })
</script>
@endif
@if(session()->has('failed'))
<script>
    swal({
        icon: "warning",
        text: "{{ session()->get('failed') }}"
    })
</script>
@endif
@if(count($errors) > 0)
<script>
    swal({
        icon: "warning",
        text: "There is {{ count($errors) }} not fill"
    })
</script>
@endif
