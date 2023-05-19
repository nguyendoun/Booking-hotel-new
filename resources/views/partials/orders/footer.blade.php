@if (Session::has('mess'))
                                <p class="alert alert-info">{{ Session::get('mess') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        này là foooter
    </footer>


    @include('partials.account.mess')

<script language="javascript">
    function change_att_mess() {
        var style = document.getElementById("mess").style.top;
        if (style == "5%") {
            document.getElementById("mess").style.top = "-100%";
            document.getElementById("mess").classList.remove("alert-success");
            // document.getElementById("mess").classList.add("add");
        }
    }

    function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#dd').attr('src', e.target.result).width(124).height(124);
    };

    reader.readAsDataURL(input.files[0]);
  }
}
</script>
