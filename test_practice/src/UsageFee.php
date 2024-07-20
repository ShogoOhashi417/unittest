<?php

namespace App;

class UsageFee {

    // ユーザー課金とオプション課金の合計
    public function getTotalFee(
        $userNumber,
        $optionNumber
    ){
        $result = 0;

        // ユーザー数が5人以下なら一律5000円
        // 50人以下なら、1ユーザー1000円
        // 50を超える分は1ユーザー500円
        if ($userNumber <= 5) {
            $result += 5000;
        } elseif ($userNumber <= 50) {
            $result += 1000 * $userNumber;
        } else {
            $result += 1000 * 50 + 500 * ($userNumber - 50);
        }

        // オプション数が3以下なら、1オプション25000円
        // ４以上なら、1オプション20000円
        if ($optionNumber <= 3) {
            $result += 25000 * $optionNumber;
        } else {
            $result += 20000 * $optionNumber;
        }

        return $result;
    }

    // 初期費用に対するユーザー課金料金の割合
    public function getUserFeeRatio(
        $userNumber,
        $contractYear
    ){
        $userFee = 0;

        // ユーザー数が5人以下なら一律5000円
        // 50人以下なら、1ユーザー1000円
        // 50を超える分は1ユーザー500円
        if ($userNumber <= 5) {
            $userFee += 5000;
        } elseif ($userNumber <= 50) {
            $userFee += 1000 * $userNumber;
        } else {
            $userFee += 1000 * 50 + 500 * ($userNumber - 50);
        }

        $initialCost = 0;

        if ($contractYear >= 2024) {
            $initialCost = 300000;
        } else {
            $initialCost = 100000;
        }

        return $userFee / $initialCost;
    }
}