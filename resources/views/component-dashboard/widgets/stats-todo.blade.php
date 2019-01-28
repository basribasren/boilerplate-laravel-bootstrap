<div class="layer w-100">
  <ul class="list-task list-group" data-role="tasklist">
    <li class="list-group-item bdw-0" data-role="task">
      <div class="checkbox checkbox-circle checkbox-info peers ai-c">
        <input type="checkbox" id="{{ $id }}" name="inputCheckboxesCall" class="peer">
        <label for="{{ $id }}" class=" peers peer-greed js-sb ai-c">
          <span class="peer peer-greed">{{ $task }}</span>
          <span class="peer">
            <span class="badge badge-pill fl-r badge-{{ $badgecolor }} lh-0 p-10">{{ $deadline }} Days</span>
          </span>
        </label>
      </div>
    </li>
  </ul>
</div>