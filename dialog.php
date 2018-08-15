<div id="my-accessible-dialog">

  <!--
    Overlay related notes:
    - It has to have the `tabindex="-1"` attribute.
    - It doesn’t have to have the `data-a11y-dialog-hide` attribute, however this is recommended. It hides the dialog when clicking outside of it.
  -->
  <div tabindex="-1" data-a11y-dialog-hide></div>

  <!--
    Dialog window content related notes:
    - It is the actual visual dialog element.
    - It doesn’t have to be a `<dialog>` element, it can be a `<div>` element with the `dialog` role (e.g. `<div role="dialog">`).
    - It doesn’t have to have the `aria-labelledby` attribute however this is recommended. It should match the `id` of the dialog title.
  -->
  <dialog aria-labelledby="dialog-title">
    <!--
      Closing button related notes:
      - It does have to have the `type="button"` attribute.
      - It does have to have the `data-a11y-dialog-hide` attribute.
      - It does have to have an aria-label attribute if you use an icon as content.
    -->
    <button type="button" data-a11y-dialog-hide aria-label="Close this dialog window">
      &times;
    </button>

    <!--
      Dialog title related notes:
      - It should have a different content than `Dialog Title`.
      - It can have a different id than `dialog-title`.
    -->
    <h1 id="dialog-title">Dialog Title</h1>

    <!--
      Here lives the main content of the dialog.
    -->
  </dialog>
</div>