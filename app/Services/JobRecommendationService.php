<?php
namespace App\Services;

use PhpOffice\PhpSpreadsheet\IOFactory;
use Rubix\ML\Classifiers\KNearestNeighbors;
use Rubix\ML\Datasets\Labeled;
use Rubix\ML\Extractors\Sheet;
use Rubix\ML\Persisters\Filesystem;
use Rubix\Ml\Datasets\Unlabeled;
use Rubix\ML\Serializers\Native;

class JobRecommendationService
{
    protected $knn;
    protected $persister;

    public function __construct()
    {
        $this->knn = new KNearestNeighbors(3);
        $this->persister = new Filesystem(storage_path('app/knn.model'));
    }

    public function trainModel($filePath)
    {
        // Load Excel file
        $spreadsheet = IOFactory::load($filePath);
        $worksheet = $spreadsheet->getActiveSheet();

        // Convert data to array
        $data = [];
        foreach ($worksheet->getRowIterator() as $row) {
            $rowData = [];
            foreach ($row->getCellIterator() as $cell) {
                $rowData[] = $cell->getValue();
            }
            $data[] = $rowData;
        }

        // Prepare training data
        $samples = array_map(function($row) {
            return array_slice($row, 0, -1); // Extract all columns except the last one
        }, $data);
        $labels = array_column($data, count($data[0]) - 1); // Extract the last column


        $dataset = new Labeled($samples, $labels);
        $this->knn->train($dataset);


        $dataset = new Unlabeled([[1,1,4,1,7,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,4,0,0,0,0,0,2,25]]);
        return $this->knn->predict($dataset);
        // Save trained model
        //$this->persister->save()
        //$this->persister->save($this->knn);
    }

    public function predict(array $sample)
    {
        $this->knn = $this->persister->load();

        return $this->knn->predict($sample);
    }
}
