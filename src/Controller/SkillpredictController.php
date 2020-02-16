<?php
declare(strict_types=1);

namespace App\Controller;
use App\Form\CSVForm;
use \SplFileObject;
use Cake\ORM\TableRegistry;


/**
 * Playdatas Controller
 *
 * @property \App\Model\Table\PlaydatasTable $Playdatas
 *
 * @method \App\Model\Entity\Playdata[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SkillpredictController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $csvform = new CSVForm();
        $csv_data = $this->request->getData('upload-csv');
        if (!is_null($csv_data)) {
            $this->set(compact('csv_data'));
            //$result = $this->CSV->read($csv_data,["a"=>"b"]); 
            //$this->addresult($result);
        }
        $this->set(compact('csvform'));
    }

}
