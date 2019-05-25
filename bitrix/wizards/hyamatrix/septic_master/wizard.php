<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

class FirstStep extends CWizardStep
{

	function InitStep()
	{
		$wizard =& $this->GetWizard();
		$wizard->solutionName = 'septic';


	}

	function OnPostForm()
	{
		$this->SetError("OnPostForm()");
	}

	function ShowStep()
	{

		$this->content .= "FirstStep";
	}
}



class SuccessStep extends CWizardStep
{
	function InitStep()
	{
		$wizard =& $this->GetWizard();
		$wizard->solutionName = 'septic';

		$this->SetStepID('success');
		$this->SetTitle(GetMessage('WIZ_FINISH'));
		$this->SetNextStep('success');
		$this->SetNextCaption(GetMessage('WIZ_GO'));
	}

	function ShowStep()
	{

		$this->content .= "SuccessStep";
	}
}

?>
