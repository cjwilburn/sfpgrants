<?php
/**
 * Importing the security component,
 * which is used to hash the passwords
 */
App::import('Core', 'Security');

/**
 * Hashes passwords in the given table
 * Usage: "cake password_hash" (to run against the default users table and password field)
 * Or: "cake password_hash -table some_table -field another_field"
 *
 * Strict mode can be turned off, this way
 * any password even potentially a hashed one already will be re-hashed
 * see below for more info on how that works. From command line:
 * "cake password_hash -strict false"
 * Or: "cake password_hash -strict 0"
 *
 */
class PasswordHashShell extends Shell {

/**
 * True/False to keep the shell from
 * showing any output
 *
 * @var boolean
 */
	private $silent = FALSE;

/**
 * Holds the instance of the current model,
 * where the hashing needs to happen
 * (Defaults to User model)
 *
 * @var object
 */
	private $model = 'User';

/**
 * Field to hash
 * (Defaults to password)
 *
 * @var string
 */
	private $field = 'password';

/**
 * If the strict (mode) is set to TRUE
 * the shell will ignore any 40 char passwords
 * (40 chars is the default length of cake's hashed password)
 *
 * From the shell we can specify the strict mode as:
 * cake password_hash -strict false/0
 *
 * @var boolean
 */
	private $strict = TRUE;

/**
 * Generic initialization function
 *
 * (Always a good idea to call the parent method)
 *
 */
	public function initialize() {
		parent::initialize();
	}

/**
 * Starting up the shell
 * Initializing shell properties based on the passed in params,
 * or falling back to defaults
 */
	public function startup() {
		if (isset($this->params['silent']) && $this->params['silent']) {
			$this->silent = TRUE;
		}

		if (isset($this->params['table']) && $this->params['table']) {
			$modelName = Inflector::classify($this->params['table']);
			$this->model = ClassRegistry::init($modelName);
		} else {
			$this->model = ClassRegistry::init($this->model);
		}

		if (isset($this->params['field']) && $this->params['field']) {
			$this->field = $this->params['field'];
		}

		if (isset($this->params['all']) && $this->params['all']) {
				$this->strict = FALSE;
		}
	}

/**
 * Main method is launched autmoatically
 * Works as a dispatcher.
 */
	public function main() {
		$this->processField();
	}

/**
 * Takes care of finding, hashing and saving the field
 * (Uses standard CakePHP hashing method)
 * If strict mode is enabled all 40 char passwords,
 * which is default hashed length are ignored.
 */
	private function processField() {
		$conditions = 1;
		if($this->strict) {
			$conditions = array(
					'LENGTH(`' . $this->field . '`) <>' => 40
			);
		}

		$fieldsToHash = $this->model->find('all', array(
				'recursive' => -1,
				'fields' => array($this->model->primaryKey, $this->field),
				'conditions' => $conditions
		));

		foreach($fieldsToHash as $field) {
			$fieldValue = $field[$this->model->alias][$this->field];
			$recordId = $field[$this->model->alias][$this->model->primaryKey];

			$fieldValue = Security::hash($fieldValue, NULL, TRUE);

			$this->out('Changing password for: ' . $recordId);
			$this->out('Changed to: ' . $fieldValue);

			$this->model->create();
			$this->model->id = $recordId;
			$data = array(
				$this->model->alias => array(
						$this->field => $fieldValue
				)
			);
			$this->model->save($data, array(
					'validate' => FALSE,
					'callbacks' => FALSE
			));
		}
	}

/**
 * Shell output
 *
 * @param string $string
 * @param boolean $newline
 * @return boolean
 */
	public function out($string, $newline = true) {
		if(!$this->silent) {
			parent::out($string, $newline = true);
		}
		return FALSE;
  }

/**
 * Displays help contents
 *
 * @access public
 */
	public function help() {
		$this->_stop();
	}
}
?>
