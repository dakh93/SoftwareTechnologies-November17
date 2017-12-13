using System;
using System.Web.Mvc;
using Calculator_CSharp.Models;
using Microsoft.Ajax.Utilities;


namespace Calculator_CSharp.Controllers
{
    public class HomeController : Controller
    {
        public ActionResult Index(Calculator calculator)
        {
            return View(calculator);
        }

        [HttpPost]
        public ActionResult Calculate(Calculator calculator)
        {
            calculator.Result = CalculateResult(calculator);

            return RedirectToAction("Index", calculator);
        }

        private decimal CalculateResult(Calculator calculator)
        {
            decimal result = 0M;
            switch (calculator.Operator) 
            {
                case "+":
                    result = calculator.LeftOperand + calculator.RightOperand;
                    break;
                case "-":
                    result = calculator.LeftOperand - calculator.RightOperand;
                    break;
                case "*":
                    result = calculator.LeftOperand * calculator.RightOperand;
                    break;
                case "/":
                    result = calculator.LeftOperand / calculator.RightOperand;
                    break;
                case "%":
                    result = calculator.LeftOperand % calculator.RightOperand;
                    break;
                case "^":
                    result = 1M;
                    for (int i = 0; i < calculator.RightOperand; i++)
                    {
                        result *= calculator.LeftOperand;
                    }
                    break;

            }
            return result;
            
        }
    }
}