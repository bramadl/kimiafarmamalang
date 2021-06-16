<script>
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true
  })
</script>
@if (session('success'))
<script>
  Toast.fire({
    icon: 'success',
    title: @json(session('success'))
  })
</script>
@endif
@if (session('error'))
<script>
  Toast.fire({
    icon: 'error',
    title: @json(session('error'))
  })
</script>
@endif