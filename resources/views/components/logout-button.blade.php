<form action="{{route('logout')}}" method="post">
    @csrf
    <button type="submit" class="text-white">
        <i class="fa fa-sign-out"></i> Logout
    </button>
</form>