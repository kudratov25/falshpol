<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 25.02.2023
 * Time: 14:54
 */

namespace app\traits;


interface ScenarioInterface
{
    /***
     * Jadval bilan bajariladigan scenario
     */
    const SCENARIO_EDIT = 'edit';

    /***
     * Jadval bilan bajariladigan qidirish vaqtidagi scenario, agar senariodan foydalanilmasa,
     * barcha ustun bo'yicha filter ishlaydi.
     *
     */
    const SCENARIO_INDEX = 'index';
}