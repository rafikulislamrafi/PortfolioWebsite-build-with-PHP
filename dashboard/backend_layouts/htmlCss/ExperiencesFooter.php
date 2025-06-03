 </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Alert Container -->
  <div class="position-fixed top-0 end-0 p-3" style="z-index: 1050;">
    <div id="alertContainer"></div>
  </div>

  <script>
    $(document).ready(function () {
      window.toggleWorkingTo = function (status) {
        const workingToField = $('#workingTo');
        const requiredSpan = $('.working-to-required');

        if (status === 'Running') {
          workingToField.prop('disabled', true).val('').css('opacity', '0.5');
          requiredSpan.hide();
          workingToField.removeAttr('required');
        } else if (status === 'Past') {
          workingToField.prop('disabled', false).css('opacity', '1');
          requiredSpan.show();
          workingToField.attr('required', 'required');
        } else {
          workingToField.prop('disabled', true).val('').css('opacity', '0.5');
          requiredSpan.hide();
          workingToField.removeAttr('required');
        }
      };
    });
  </script>
</body>

</html>