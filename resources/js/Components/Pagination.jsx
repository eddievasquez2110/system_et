import React from 'react';
import { Link } from '@inertiajs/inertia-react';
  
export default function Pagination({ links }) {
    const a = links[0].label;
    const b = a.replace('&','&amp')
    function getClassName(active) {
        if(active) {
            return "mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-primary focus:text-primary bg-blue-700 text-white";
        } else{
            return "mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded hover:bg-white focus:border-primary focus:text-primary";
        }
    }
    return (
        links.length > 3 && (
            <div className="mb-2">
                <pre>{b}</pre>
                <div className="flex flex-wrap mt-8">
                    {links.map((link, key) => (
                            link.url === null ?
                                    (<div
                                            className="mr-1 mb-1 px-4 py-3 text-sm leading-4 text-gray-500 border rounded"
                                        >{link.label}</div>) :
  
                                    (<Link
                                                className={getClassName(link.active)}
                                                href={ link.url }
                                            >{link.label}</Link>)
                                    ))}
                </div>
            </div>
        )
    );
}