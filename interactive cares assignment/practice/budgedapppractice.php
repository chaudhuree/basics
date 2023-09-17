<?php

class BudgetApp
{
  private $months = [
    'january',
    'february',
    'march',
    'april',
    'may',
    'june',
    'july',
    'august',
    'september',
    'october',
    'november',
    'december'
  ];
  private $incomeFile;
  private $expenseFile;
  private $income = [];
  private $expense = [];
  private $incomecategories = [];
  private $expensecategories = [];

  function __construct()
  {
    echo "\033[34m
    ______                                  _______             _             
   |  ____|                                |__   __|           | |            
   | |__  __  ___ __   ___ _ __  ___  ___     | |_ __ __ _  ___| | _____ _ __ 
   |  __| \ \/ / '_ \ / _ \ '_ \/ __|/ _ \    | | '__/ _` |/ __| |/ / _ \ '__|
   | |____ >  <| |_) |  __/ | | \__ \  __/    | | | | (_| | (__|   <  __/ |   
   |______/_/\_\ .__/ \___|_| |_|___/\___|    |_|_|  \__,_|\___|_|\_\___|_|   
               | |                                                            
               |_|                                                            
    \033[0m";
    // Set the income and expense file names according to the current year
    $this->incomeFile = date("Y") . "_" . "income.json";
    $this->expenseFile = date("Y") . "_" . "expense.json";
    // Check if the income and expense file exists
    // if exist then get the income/expense data from the file and store it in income/expense array
    // if not exist then create the income/expense file and store empty array in income/expense array
    if (file_exists($this->incomeFile)) {
      // Get the income data from the file
      $this->income = json_decode(file_get_contents($this->incomeFile), true);
    } else {
      // Create the income file
      file_put_contents($this->incomeFile, json_encode(['january' => ['default' => 0]]));
    }

    // expense part
    if (file_exists($this->expenseFile)) {
      $this->expense = json_decode(file_get_contents($this->expenseFile), true);
    } else {
      file_put_contents($this->expenseFile, json_encode(['january' => ['default' => 0]]));
    }
  }




  // MAIN MENU FUNCTION
  public function run()
  {
    while (true) {
      echo "\n";
      echo "1. Add Income\n";
      echo "2. Add Expense\n";
      echo "3. List Income\n";
      echo "4. List Expense\n";
      echo "5. List Income Category\n";
      echo "6. List Expense Category\n";
      echo "7. List Income By Month\n";
      echo "8. List Expense By Month\n";
      echo "9. Calculate Savings By Month\n";
      echo "10. Exit\n";
      echo "Enter your choice: ";
      $choice = intval(trim(fgets(STDIN)));
      switch ($choice) {
        case 1:
          $this->addIncome();
          break;
        case 2:
          $this->addExpense();
          break;
        case 3:
          $this->listIncome();
          break;
        case 4:
          $this->listExpense();
          break;
        case 5:
          $this->listIncomeCategory();
          break;
        case 6:
          $this->listExpenseCategory();
          break;
        case 7:
          $this->listIncomeByMonth();
          break;
        case 8:
          $this->listExpenseByMonth();
          break;
        case 9:
          $this->calculateSavingsByMonth();
          break;
        case 10:
          exit();
        default:
          echo "Enter valid choice\n";
      }
    }
  }
  // INCOME ADDING FUNCTION
  public function addIncome($givenmonth = "january")
  {
    // Check if the income file exists
    if (file_exists($this->incomeFile)) {
      // Get the income data from the file
      $this->income = json_decode(file_get_contents($this->incomeFile), true);
    }

    // Check if the month exists in the income array
    if (!isset($this->income[$givenmonth])) {
      if (in_array($givenmonth, $this->months)) {
        $this->income[$givenmonth] = ["default" => 0];
        file_put_contents($this->incomeFile, json_encode($this->income));
        return;
      } else {

        echo "Enter valid month(i.e, january/february..):";
        return;
      }
    }

    echo "Enter month(i.e, january/february..): ";
    $month = trim(fgets(STDIN));
    echo "Enter income amount: ";
    $amount = intval(trim(fgets(STDIN)));
    echo "Enter income category: ";
    $category = trim(fgets(STDIN));

    // Check if the month exists in the income array
    if (!isset($this->income[$month])) {
      if (in_array($month, $this->months)) {
        $this->income[$month] = [];
      } else {
        echo "Enter valid month(i.e: january/february..): ";
        return;
      }
    }

    // Check if the category exists in the specified month
    if (isset($this->income[$month][$category])) {
      // Category exists, add the new amount to the existing amount
      $this->income[$month][$category] += $amount;
    } else {
      // Category doesn't exist, create a new field with the category and amount
      $this->income[$month][$category] = $amount;
    }

    // Save the income array to the file
    file_put_contents($this->incomeFile, json_encode($this->income));
  }

  // EXPENSE ADDING FUNCTION
  public function addExpense($givenmonth = "january")
  {
    // Check if the income file exists
    if (file_exists($this->expenseFile)) {
      // Get the expense data from the file
      $this->expense = json_decode(file_get_contents($this->expenseFile), true);
    }
    // Check if the month exists in the income array
    if (!isset($this->expense[$givenmonth])) {
      if (in_array($givenmonth, $this->months)) {
        $this->expense[$givenmonth] = ["default" => 0];
        file_put_contents($this->expenseFile, json_encode($this->expense));
        return;
      } else {
        echo "Enter valid month(i.e, january/february..): ";
        return;
      }
    }
    echo "Enter month(i.e, january/february..): ";
    $month = trim(fgets(STDIN));
    echo "Enter income amount: ";
    $amount = intval(trim(fgets(STDIN)));
    echo "Enter income category: ";
    $category = trim(fgets(STDIN));

    // Check if the month exists in the income array
    if (!isset($this->expense[$month])) {
      if (in_array($month, $this->months)) {
        $this->expense[$month] = [];
      } else {
        echo "Enter valid month(i.e: january/february..): ";
        return;
      }
    }

    // Check if the category exists in the specified month
    if (isset($this->expense[$month][$category])) {
      // Category exists, add the new amount to the existing amount
      $this->expense[$month][$category] += $amount;
    } else {
      // Category doesn't exist, create a new field with the category and amount
      $this->expense[$month][$category] = $amount;
    }

    // Save the income array to the file
    file_put_contents($this->expenseFile, json_encode($this->expense));
  }

  // INCOME LISTING FUNCTION
  public function listIncome()
  {
    // Check if the income file exists
    if (file_exists($this->incomeFile)) {
      // Get the income data from the file
      $this->income = json_decode(file_get_contents($this->incomeFile), true);
    }

    // Check if the income array is empty
    if (empty($this->income)) {
      echo "No income added yet\n";
      return;
    }

    // Loop through the income array and display the data
    foreach ($this->income as $month => $income) {
      echo "Month: $month\n";
      foreach ($income as $category => $amount) {
        if ($category != "default") {
          echo "Category: $category, Amount: $amount\n";
        }
      }
    }
  }
  // EXPENSE LISTING FUNCTION
  public function listExpense()
  {
    // Check if the income file exists
    if (file_exists($this->expenseFile)) {
      // Get the income data from the file
      $this->expense = json_decode(file_get_contents($this->expenseFile), true);
    }

    // Check if the expense array is empty
    if (empty($this->expense)) {
      echo "No expense added yet\n";
      return;
    }

    // Loop through the expense array and display the data
    foreach ($this->expense as $month => $expense) {
      echo "Month: $month\n";
      foreach ($expense as $category => $amount) {
        if ($category != "default") {
          echo "Category: $category, Amount: $amount\n";
        }
      }
    }
  }
  // INCOME CATEGORY LISTING FUNCTION
  public function listIncomeCategory()
  {
    // Check if the income file exists
    if (file_exists($this->incomeFile)) {
      // Get the income data from the file
      $this->income = json_decode(file_get_contents($this->incomeFile), true);
    }

    // Check if the income array is empty
    if (empty($this->income)) {
      echo "No income added yet\n";
      return;
    }

    // Loop through the income array and display the data
    foreach ($this->income as $month => $income) {
      foreach ($income as $category => $amount) {
        if ($category != "default") {
          $this->incomecategories[] = $category;
        }
      }
    }
    echo "Income Categories: \n";
    foreach (array_unique($this->incomecategories) as $category) {
      echo "$category\n";
    }
  }
  // EXPENSE CATEGORY LISTING FUNCTION
  public function listExpenseCategory()
  {
    // Check if the income file exists
    if (file_exists($this->expenseFile)) {
      // Get the income data from the file
      $this->expense = json_decode(file_get_contents($this->expenseFile), true);
    }

    // Check if the income array is empty
    if (empty($this->expense)) {
      echo "No income added yet\n";
      return;
    }

    // Loop through the income array and display the data
    foreach ($this->expense as $month => $expense) {
      foreach ($expense as $category => $amount) {
        if ($category != "default") {

          $this->expensecategories[] = $category;
        }
      }
    }
    echo "Expense Categories: \n";
    foreach (array_unique($this->expensecategories) as $category) {
      echo "$category\n";
    }
  }
  // INCOME LISTING BY MONTH FUNCTION
  public function listIncomeByMonth()
  {
    echo "\n\n INCOME LIST: " . PHP_EOL;
    // Check if the income file exists
    if (file_exists($this->incomeFile)) {
      // Get the income data from the file
      $this->income = json_decode(file_get_contents($this->incomeFile), true);
    }

    // Check if the income array is empty
    if (empty($this->income)) {

      echo "No income added yet\n" . PHP_EOL;
      return;
    }

    // Loop through the income array and display the data
    foreach ($this->income as $month => $income) {
      echo "Month: $month\n";
      foreach ($income as $category => $amount) {
        if ($category != "default") {
          echo "Category: $category, Amount: $amount\n";
        }
      }
    }
  }
  // EXPENSE LISTING BY MONTH FUNCTION
  public function listExpenseByMonth()
  {
    echo "\n\n EXPENSE LIST: \n";
    // Check if the income file exists
    if (file_exists($this->expenseFile)) {
      // Get the income data from the file
      $this->expense = json_decode(file_get_contents($this->expenseFile), true);
    }

    // Check if the income array is empty
    if (empty($this->expense)) {
      echo "No income added yet\n";
      return;
    }

    // Loop through the income array and display the data
    foreach ($this->expense as $month => $expense) {
      echo "Month: $month\n";
      foreach ($expense as $category => $amount) {
        if ($category != "default") {
          echo "Category: $category, Amount: $amount\n";
        }
      }
    }
  }
  // CALCULATE SAVINGS BY MONTH FUNCTION
  public function calculateSavingsByMonth()
  {
    echo "\n\n SAVINGS LIST: \n";
    // Check if the income file exists
    if (file_exists($this->incomeFile)) {
      // Get the income data from the file
      $this->income = json_decode(file_get_contents($this->incomeFile), true);
    }
    // Check if the expense file exists
    if (file_exists($this->expenseFile)) {
      // Get the expense data from the file
      $this->expense = json_decode(file_get_contents($this->expenseFile), true);
    }

    // Check if the income array is empty
    if (empty($this->income)) {
      echo "No income added yet\n";
      return;
    }
    // Check if the expense array is empty
    if (empty($this->expense)) {
      echo "No expense added yet\n";
      return;
    }

    echo "\n Income List: \n";
    // Loop through the income array and display the data
    foreach ($this->income as $month => $income) {
      echo "Month: $month\n";
      echo "Income:";
      echo array_sum(array_values($income));
      echo "\n";
    }
    echo "\n Expense List: \n";
    // Loop through the expense array and display the data
    foreach ($this->expense as $month => $expense) {
      echo "Month: $month\n";
      echo "Expense:";
      echo array_sum(array_values($expense));
      echo "\n";
    }



    echo "\n Savings List By Month: \n";
    // display the data of savings by month
    foreach ($this->income as $month => $income) {
      if (!isset($this->expense[$month])) {
        $this->addExpense($month);
      };
      echo "Month: $month\n";
      echo "Savings:";
      echo array_sum(array_values($income)) - array_sum(array_values($this->expense[$month]));
      echo "\n";
    }
  }
}

$app = new BudgetApp();
$app->run();
// $app->addIncome();
// $app->addExpense();
// $app->listIncome();
// $app->listExpense();
// $app->listIncomeCategory();
// $app->listExpenseCategory();
// $app->listIncomeByMonth();
// $app->listExpenseByMonth();
// $app->calculateSavingsByMonth();





/*
 expense tracker app
 $income = [
   'january'=>[
     'sallery'=>1000,
     'bonus'=>500
   ]
 ];


 $expense = [
   'january'=>[
     'food'=>500,
     'rent'=>200
   ]
 ];

 $income[month::january]['food']=500;
 print_r($income);
*/