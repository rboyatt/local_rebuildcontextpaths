<?php

namespace local_rebuildcontextpaths\task;

class rebuild_context_paths extends \core\task\scheduled_task {

  public function get_name() {
    return get_string('pluginname', 'local_rebuildcontextpaths');
  }

  public function execute() {

    \context_helper::build_all_paths(true);

  }

  public function get_run_if_component_disabled() {
    return true;
  }

}