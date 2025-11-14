<?php

namespace App\Services;

use App\Models\Company;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Log;

class CompanyService
{
    public function __construct() {}

    public function getCompany(int $companyId): Company
    {
        return Company::findOrFail($companyId);
    }

    public function listCompanies(int $perPage = 10): LengthAwarePaginator
    {
        return Company::paginate($perPage);
    }

    public function storeCompany(array $data): Company
    {
        $company = Company::create($data);

        Log::info("Company created: {$company->id}");

        return $company;
    }

    public function updateCompany(Company $company, array $data): Company
    {
        $company->update($data);
        Log::info("Company updated: {$company->id} - data: ".json_encode($data));

        return $company;
    }

    public function deleteCompany(Company $company): Company
    {
        $company->delete();
        Log::info("Company deleted: {$company->id}");

        return $company;
    }
}
