<?php
// budget app


class BudgetApp
{
    private $incomeFile = 'income.txt';
    private $expenseFile = 'expense.txt';

    public function run()
    {
        echo "Budget Management Application\n";
        echo "-----------------------------\n";

        while (true) {
            echo "1. Add income\n";
            echo "2. Add expense\n";
            echo "3. View incomes\n";
            echo "4. View expenses\n";
            echo "5. View savings\n";
            echo "6. View categories\n";
            echo "7. Exit\n";

            echo "Enter your option: ";
            $choice = trim(fgets(STDIN));

            switch ($choice) {
                case '1':
                    $this->addIncome();
                    break;
                case '2':
                    $this->addExpense();
                    break;
                case '3':
                    $this->viewIncomes();
                    break;
                case '4':
                    $this->viewExpenses();
                    break;
                case '5':
                    $this->viewSavings();
                    break;
                case '6':
                    $this->viewCategories();
                    break;
                case '7':
                    exit(0);
                default:
                    echo "Invalid option. Please try again.\n";
            }
        }
    }

    private function addIncome()
    {
        echo "Enter income amount: ";
        $amount = trim(fgets(STDIN));
        echo "Enter income category: ";
        $category = trim(fgets(STDIN));

        $data = "Income: $amount, Category: $category\n";
        file_put_contents($this->incomeFile, $data, FILE_APPEND);
        echo "Income added successfully.\n";
    }

    private function addExpense()
    {
        echo "Enter expense amount: ";
        $amount = trim(fgets(STDIN));
        echo "Enter expense category: ";
        $category = trim(fgets(STDIN));

        $data = "Expense: $amount, Category: $category\n";
        file_put_contents($this->expenseFile, $data, FILE_APPEND);
        echo "Expense added successfully.\n";
    }

    private function viewIncomes()
    {
        $incomes = file_get_contents($this->incomeFile);
        echo "Income List:\n";
        echo $incomes;
    }

    private function viewExpenses()
    {
        $expenses = file_get_contents($this->expenseFile);
        echo "Expense List:\n";
        echo $expenses;
    }

    private function viewSavings()
    {
        $incomeData = file_get_contents($this->incomeFile);
        $expenseData = file_get_contents($this->expenseFile);

        preg_match_all('/Income: (\d+)/', $incomeData, $incomeMatches);
        preg_match_all('/Expense: (\d+)/', $expenseData, $expenseMatches);

        $totalIncome = array_sum($incomeMatches[1]);
        $totalExpense = array_sum($expenseMatches[1]);
        $savings = $totalIncome - $totalExpense;

        echo "Total Income: $totalIncome\n";
        echo "Total Expense: $totalExpense\n";
        echo "Savings: $savings\n";
    }

    private function viewCategories()
    {
        $incomeData = file_get_contents($this->incomeFile);
        $expenseData = file_get_contents($this->expenseFile);
        // function extractCategories($incomeData) {
        //     // Split the $incomeData string into lines
        //     $lines = explode("\n", $incomeData);
        
        //     $categories = [];
        
        //     foreach ($lines as $line) {
        //         // Check if the line contains "Category: "
        //         if (strpos($line, 'Category: ') !== false) {
        //             // Extract the category name
        //             $category = substr($line, strpos($line, 'Category: ') + strlen('Category: '));
        //             $categories[] = $category;
        //         }
        //     }
        //     var_dump($categories);
        //     return $categories;
        // }
        // extractCategories($incomeData);

        // function extractIncomeValues($incomeData) {
        //     // Split the $incomeData string into lines
        //     $lines = explode("\n", $incomeData);
        
        //     $incomeValues = [];
        
        //     foreach ($lines as $line) {
        //         // Check if the line contains "Income: "
        //         if (strpos($line, 'Income: ') !== false) {
        //             // Extract the income value
        //             $incomeValue = substr($line, strpos($line, 'Income: ') + strlen('Income: '));
        //             $incomeValues[] = (int)$incomeValue; // Convert to integer
        //         }
        //     }
        //     // var_dump($incomeValues);
        //     return $incomeValues;
        // }
        // $valueofincome=extractIncomeValues($incomeData);
        // var_dump($valueofincome);
        preg_match_all('/Category: (.+?)\n/', $incomeData, $incomeMatches);
        preg_match_all('/Category: (.+?)\n/', $expenseData, $expenseMatches);
       
        $incomeCategories = array_unique($incomeMatches[1]);
        $expenseCategories = array_unique($expenseMatches[1]);

        echo "Income Categories:\n";
        foreach ($incomeCategories as $category) {
            echo "$category\n";
        }

        echo "Expense Categories:\n";
        foreach ($expenseCategories as $category) {
            echo "$category\n";
        }
    }
}

$app = new BudgetApp();
$app->run();
