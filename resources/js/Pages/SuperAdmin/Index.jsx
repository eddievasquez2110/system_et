import React, { useState } from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/inertia-react';
import DashCircle from '@/Components/DashCircle';
import DashBar from '@/Components/DashBar';


export default function Dashboard(props) {
    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard {props.auth.user.name}</h2>}
        >

        <Head title="SuperAdmin" />
            <div className='flex flex-col'>
                <div className='wrapper flex flex-wrap justify-center mt-8 gap-4'>
                    
                    <DashCircle></DashCircle>
                    
                    <DashCircle></DashCircle>
                    <DashCircle></DashCircle>
                </div>
                
                <div className=' flex place-content-around mt-8'>
                    <div className=''>
                        <DashBar className=''></DashBar>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
